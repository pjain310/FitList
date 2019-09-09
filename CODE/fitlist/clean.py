#!/usr/bin/env python3
"""

  Author: George Gruenhagen
"""
# --- Imports ---
import argparse
import time
import re
parser = argparse.ArgumentParser()

def parseArgs():
    global parser
    parser.add_argument("-n", help = "Nutrient file")
    parser.add_argument("-s", help = "Serving file")
    parser.add_argument("-p", help = "Product file")
    parser.add_argument("-o", help = "Output file for gff gene IDs", nargs = '?', const = "", default = "")

    args = parser.parse_args()
    return args.n, args.s, args.p, args.o

def cleanNutrient(nutrient):
    """
    Only keep the Nutrients that have Energy, Protein, carb, and Fiber values. Then,
    put these values in one row.
    """
    allItems = []
    cleaned = {}
    energy = {}
    protein = {}
    carb = {}
    fiber = {}
    energyCode = "208"
    proteinCode = "203"
    carbCode = "205"  # carbohydrate by difference
    fiberCode = "291"


    with open(nutrient, 'r') as nutrient:
        nutrient.readline()
        for line in nutrient:
            lineSplit = line.split('",')
            itemNo = lineSplit[0][1::]
            code = lineSplit[1][1::]
            value = float(lineSplit[4][1::])
            allItems.append(itemNo)

            # Put the data in the appropiate dictionary depending on what kind
            # of macronutrient it is
            if code == energyCode:
                energy[itemNo] = value
            elif code == proteinCode:
                protein[itemNo] = value
            elif code == carbCode:
                carb[itemNo] = value
            elif code == fiberCode:
                fiber[itemNo] = value

    # Put all the macronutrients together for one item
    allItems = list(set(allItems))
    for item in allItems:
        if item in energy and item in protein and item in carb and item in fiber:
            cleaned[item] = [energy[item], protein[item], carb[item], fiber[item]]
            # print(item + ":")
            # print(cleaned[item])

    return cleaned

def adjustToServing(serving, cleaned):
    """
    Modify the value of the macronutrients based on the serving size
    """
    with open(serving, 'r') as serving:
        serving.readline()
        for line in serving:
            lineSplit = line.split(',')
            itemNo = lineSplit[0][1:-1]
            houseUom = lineSplit[4][1:-1]
            servingUom = lineSplit[3][1:-1]
            if lineSplit[1] != "\"\"" and lineSplit[3] != "\"\"":
                # print(line)
                servingGrams = float(lineSplit[1][1:-1])
                numServings = float(lineSplit[3][1:-1])
                multiplier = (numServings * servingGrams) / 100

                if houseUom.lower() == "container" and servingUom == "ml":  # Only keep the rows that have container as their serving size
                    print(line)
                    adjusted = []
                    for nutrient in cleaned[itemNo]:
                        adjusted.append(nutrient * multiplier)
                    cleaned[itemNo] = adjusted

    return cleaned

def findItemName(adjusted, product):
    with open(product, 'r') as product:
        for line in product:
            lineSplit = line.split('",')
            itemNo = lineSplit[0][1::]
            name = lineSplit[1][1::]
            upc = lineSplit[3][1::]
            if itemNo in adjusted:
                withName = adjusted[itemNo]
                withName.append(name)
                withName.append(upc)
                adjusted[itemNo] = withName
    return adjusted

def write(output, items):
    with open(output, 'w') as output:
        for item in items:
            output.write(item)
            for nutrient in items[item]:
                output.write("\t" + str(nutrient))
            output.write("\n")

def main():
    nutrient, serving, product, output = parseArgs()
    cleaned = cleanNutrient(nutrient)
    adjusted = adjustToServing(serving, cleaned)
    named = findItemName(adjusted, product)
    write(output, named)

main()
