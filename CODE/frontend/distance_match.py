import random as rand
import sys
unpacked_product_code=sys.argv[1] #Assuming the terminal call is 'python distance_match.py <nutrition_code>'
unpacked_nutrition_code="null"

all_ids={}
prod_ids=[]
nut_ids=[]
with open('./sample_with_codes.tsv','r') as file:
	for line in file:
		line=line.strip()
		prod_ids.append(line.split('\t')[0])
		nut_ids.append(line.split('\t')[6])
		all_ids[line.split('\t')[0]]=line.split('\t')[6]
		if line.split('\t')[0]==unpacked_product_code:
			unpacked_nutrition_code=line.split('\t')[6]
######################################################################################
#                          FINDING REPLACEMENT NUTRITION ID                          #
######################################################################################

#CASE OF EXACT MATCH
if unpacked_nutrition_code in nut_ids:
	potential_replacement_id=unpacked_nutrition_code
#IF NO EXACT MATCH
else:
	#CHOOSING A PARAMETER TO TWEAK
	mutate_parameter=rand.randint(0,3)
	#FOR ALL PARAMETERS BELOW LEVEL 3, ADD 1 LEVEL
	if (int(unpacked_nutrition_code[mutate_parameter])<3):
		potential_replacement_id=unpacked_nutrition_code[:mutate_parameter]+str(int(unpacked_nutrition_code[mutate_parameter])+1)+unpacked_nutrition_code[mutate_parameter+1:]
	#FOR PARAMETER THAT IS AT LEVEL 3, DECREASE 1 LEVEL
	elif (int(unpacked_nutrition_code[mutate_parameter])==3):
		potential_replacement_id=unpacked_nutrition_code[:mutate_parameter]+str(int(unpacked_nutrition_code[mutate_parameter])-1)+unpacked_nutrition_code[mutate_parameter+1:]

########################################################################################
#                          FINDING REPLACEMENT PRODUCT ID                              #
########################################################################################

for i in prod_ids:
	if all_ids[i] == potential_replacement_id and i!=unpacked_product_code:
		replaced_product=i
		break;

print(replaced_product)
