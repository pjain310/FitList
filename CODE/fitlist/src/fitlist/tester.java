package fitlist;
import fitlist.GList;
import java.util.Collections;


import java.io.BufferedReader;
import java.io.File;
import java.io.FileNotFoundException;
import java.io.FileReader;
import java.io.IOException;
import java.util.ArrayList;

import fitlist.Item;
public class tester {
	public static int calcEnergy(boolean male, int age, int weight, int height, int MET, boolean loseWeight, boolean gainWeight) {
		double mass = weight * 0.453592;
		double heightSI = height * 2.54;  // height in SI units (aka centimeters)
		int s = 5;  // s has no biological meaning. It's just a number used to adjust caloric intake between men and women.
		if (!male)	{	s = -161;	}
		
		double bmr = ( 10 * mass + 6.25 * heightSI + 5 * age + s );  // Basal Metabloic Rate
		double exerciseCalories = 60 * MET * 3.5 * (mass / 200);  // Calories burnt during exercise
		
		double weightLossMultiplier = loseWeight ? 0.9 : 1; // Multiplier if you want to lose weight
		weightLossMultiplier = gainWeight ? 1.1 : 1; // Multiplier if you want to gain weight
		
		return (int) ( weightLossMultiplier * (bmr + exerciseCalories) );
	}
	
	/**
	 * Calculate Recommended Nutritional Values
	 * @param male: true if the user is a male
	 * @param age: the age of the user
	 * @param weight: the weight of the user in lbs
	 * @param height: the height of the user in inches
	 * @param MET: stands for Metabolic Equivalent for Task. It's a measure of activity level.
	 * 
	 * @return recommenedValues: a list of intergers where each index in the list corresponds to a recommened nutritional
	 * value. recommenedValues[0] is energy, recommenedValues[1] is protein, recommenedValues[2] is carbohydrates, and 
	 * recommenedValues[3] is fiber.
	 */
	public static int[] calcNutrient(boolean male, int age, int weight, int height, int MET, boolean loseWeight, boolean gainWeight, boolean gainMuscle, int days) {
		int[] recommenedValues = new int[4];
		// Calculate the Energy (kcal) recommened for the user
		recommenedValues[0] = calcEnergy(male, age, weight, height, MET, loseWeight, gainWeight);
		
		// Calculate the Protein, Carbohydrates, and Fiber recommeneded for the user
		if (male) {
			if (age < 1)		{	recommenedValues[1] = 10; recommenedValues[2] = 75; recommenedValues[3] = 15;	}
			else if (age <= 3)	{	recommenedValues[1] = 13; recommenedValues[2] = 130; recommenedValues[3] = 19;	}
			else if (age <= 8)	{	recommenedValues[1] = 19; recommenedValues[2] = 130; recommenedValues[3] = 25;	}
			else if (age <= 13)	{	recommenedValues[1] = 34; recommenedValues[2] = 130; recommenedValues[3] = 31;	}
			else if (age <= 18)	{	recommenedValues[1] = 52; recommenedValues[2] = 130; recommenedValues[3] = 38;	}
			else if (age <= 30)	{	recommenedValues[1] = 56; recommenedValues[2] = 130; recommenedValues[3] = 38;	}
			else if (age <= 50)	{	recommenedValues[1] = 56; recommenedValues[2] = 130; recommenedValues[3] = 38;	}
			else if (age <= 70)	{	recommenedValues[1] = 56; recommenedValues[2] = 130; recommenedValues[3] = 30;	}
			else				{	recommenedValues[1] = 56; recommenedValues[2] = 130; recommenedValues[3] = 30;	}  // age is over 70
		}
		else {
			// user is a female, sorry this is gender binary
			if (age < 1)		{	recommenedValues[1] = 10; recommenedValues[2] = 75; recommenedValues[3] = 15;	}
			else if (age <= 3)	{	recommenedValues[1] = 13; recommenedValues[2] = 130; recommenedValues[3] = 19;	}
			else if (age <= 8)	{	recommenedValues[1] = 19; recommenedValues[2] = 130; recommenedValues[3] = 25;	}
			else if (age <= 13)	{	recommenedValues[1] = 34; recommenedValues[2] = 130; recommenedValues[3] = 26;	}
			else if (age <= 18)	{	recommenedValues[1] = 46; recommenedValues[2] = 130; recommenedValues[3] = 26;	}
			else if (age <= 30)	{	recommenedValues[1] = 46; recommenedValues[2] = 130; recommenedValues[3] = 25;	}
			else if (age <= 50)	{	recommenedValues[1] = 46; recommenedValues[2] = 130; recommenedValues[3] = 25;	}
			else if (age <= 70)	{	recommenedValues[1] = 46; recommenedValues[2] = 130; recommenedValues[3] = 21;	}
			else				{	recommenedValues[1] = 46; recommenedValues[2] = 130; recommenedValues[3] = 21;	}  // age is over 70
		}
		
		// Increase the Amount of Protein if the user wants to gain weight
		if (gainMuscle) {
			int gainMuscleProtein = (int) (0.55 * weight);
			if (gainMuscleProtein > recommenedValues[1]) {
				// If the amount of protein to gain muscle is somehow below the nih recommended value
				// the keep the nih recommended value
				recommenedValues[1] = gainMuscleProtein;
			}
		}
		
		// Adjust the recommendation for how many days the list should last
		for(int i=0; i< recommenedValues.length; i++) {
			recommenedValues[i] *= days;
		}
		return recommenedValues;
	}
	
	public static ArrayList<GList> removeDuplicates(ArrayList<GList> list) {
		ArrayList<GList> dedup = new ArrayList<GList>();
		
		for (GList gl : list) {
			if (!dedup.contains(gl)) {
				dedup.add(gl);
			}
		}
		
		return dedup;
	}
	
	public static void main(String[] args) {
		/**
		 * Calculate Recommended Nutritional Values
		 */
		boolean male = true;
		int age = 21;
		int weight = 165;
		int height = 75;
		int MET = 9;
		boolean loseWeight = false;
		boolean gainWeight = true;
		boolean gainMuscle = true;
		int days = 7;
		String exclude = ",,";
		// Parse Input
		if (args[0].equalsIgnoreCase("true") || args[0].equalsIgnoreCase("false")) {
			male = args[0].equalsIgnoreCase("true") ? true : false;
		} else {
	        System.err.println("Argument" + args[0] + " must be either true or false.");
	        System.exit(1);
	    }
		if (args[1].matches("^[0-9]+$")) {
			age = Integer.parseInt(args[1]);
		} else {
	        System.err.println("Argument" + args[1] + " must be an integer.");
	        System.exit(1);
	    }
		if (args[2].matches("^[0-9]+$")) {
			weight = Integer.parseInt(args[2]);
		} else {
	        System.err.println("Argument" + args[2] + " must be an integer.");
	        System.exit(1);
	    }
		if (args[3].matches("^[0-9]+$")) {
			height = Integer.parseInt(args[3]);
		} else {
	        System.err.println("Argument" + args[3] + " must be an integer.");
	        System.exit(1);
	    }
		if (args[4].matches("^[0-9]+$")) {
			MET = Integer.parseInt(args[4]);
		} else {
	        System.err.println("Argument" + args[4] + " must be an integer.");
	        System.exit(1);
	    }
		if (args[5].equalsIgnoreCase("true") || args[5].equalsIgnoreCase("false")) {
			loseWeight = args[5].equalsIgnoreCase("true") ? true : false;
		} else {
	        System.err.println("Argument" + args[5] + " must be either true or false.");
	        System.exit(1);
	    }
		if (args[6].equalsIgnoreCase("true") || args[6].equalsIgnoreCase("false")) {
			gainWeight = args[6].equalsIgnoreCase("true") ? true : false;
		} else {
	        System.err.println("Argument" + args[6] + " must be either true or false.");
	        System.exit(1);
	    }
		if (args[7].equalsIgnoreCase("true") || args[7].equalsIgnoreCase("false")) {
			gainMuscle = args[7].equalsIgnoreCase("true") ? true : false;
		} else {
	        System.err.println("Argument" + args[7] + " must be either true or false.");
	        System.exit(1);
	    }
		if (args[8].matches("^[0-9]+$")) {
			days = Integer.parseInt(args[8]);
		} else {
	        System.err.println("Argument" + args[8] + " must be an integer.");
	        System.exit(1);
	    }
		exclude = args[9];
		exclude = exclude.substring(1, exclude.length() -1);
		
		int[] recommenedValues = calcNutrient(male, age, weight, height, MET, loseWeight, gainWeight, gainMuscle, days);
		
		int nihEnergy = recommenedValues[0];
		int nihProtein = recommenedValues[1];
		int nihCarb = recommenedValues[2];
		int nihFiber = recommenedValues[3];
		System.out.println("" + nihEnergy + "," + nihProtein + "," + nihCarb + "," + nihFiber);
		
		/**
		 * Generate Grocery List
		 */
		long startTime = System.currentTimeMillis();
		// Read nutrition data
		File file = new File("sample.tsv");
		ArrayList<Item> all = new ArrayList<Item>();
		try (BufferedReader br = new BufferedReader(new FileReader(file))) {
		    String line;
		    while ((line = br.readLine()) != null) {
		       String[] lineSplit = line.split("\t");
		       Item newItem = new Item(Integer.parseInt(lineSplit[0]), Float.parseFloat(lineSplit[1]), Float.parseFloat(lineSplit[2]), 
		    		   		  		   Float.parseFloat(lineSplit[3]), Float.parseFloat(lineSplit[4]), lineSplit[5]);
		       // If the product name does not contain one of the excluded keywords
		       // then add the item
		       if (exclude.isEmpty() || !lineSplit[5].contains(exclude)) {
		    	   all.add(newItem);
		       }
		    }
		} catch (FileNotFoundException e) {
			e.printStackTrace();
		} catch (IOException e) {
			e.printStackTrace();
		}
		
		// Set constants for the population
		int size = 100;
		int mutRate = 100;
		int avgListSize;
		// Change the average list size based on how many days the list should last for
		if (days <= 2) {
			avgListSize = 10;
		} else {
			avgListSize = 35;
		}
		int maxGen = 200;
		
		// Initialize the Population
		Population pop = new Population(size, mutRate, avgListSize, all, nihEnergy, nihProtein, nihCarb, nihFiber);
		// Simulate multiple generations of natural selection
		for (int i = 1; i <= maxGen; i++) {
			float[] stats = pop.incrementGen("quiet");
			if (i == maxGen) {
				//System.out.println("" + stats[0] + "," + stats[1]); // average fit and best fit
				GList best = pop.findBest();
			}
		}
		ArrayList<GList> glists = pop.getPop();
		ArrayList<GList> dedup = removeDuplicates(glists);
		//System.out.println("Num GLists: " + glists.size() + "\nAfter dedup: " + dedup.size());
		
		String glistsString = "";
		for (GList glist : dedup) {
			glistsString += glist;
			glistsString += "\n";
		}
		System.out.print(glistsString.substring(0, glistsString.length()-1));
		
		//System.out.println(pop);

		long endTime = System.currentTimeMillis();
		//System.out.println("Runtime: " + (endTime - startTime) + " milliseconds");
	}

}
