package fitlist;

import java.util.ArrayList;
import java.util.Collections;
import java.util.Random;

public class Population {
	// Attributes
	private ArrayList<GList> pop;		// Population of grocery lists
	private static int size;			// Size of the population
	private static int mutRate;			// Mutation Rate (maybe use a float?)
	private static int avgListSize;		// The average number of items in the grocery lists. Allows for varied sizes.
	private static ArrayList<Item> all;	// All the items imported (acts as a pool of new mutations)
	
	private static float nihEnergy;		// NIH's recommended Energy intake
	private static float nihProtein;	// "		"		 Protein	"
	private static float nihCarb;		// "		"		 Carb		"
	private static float nihFiber;		// "		"		 Fiber		"
	

	// Constructors	
	public Population(int size, int mutRate, int avgListSize, ArrayList<Item> all, float nihEnergy, float nihProtein, float nihCarb, float nihFiber) {
		this(generateInitPop(all, size, avgListSize, nihEnergy, nihProtein, nihCarb, nihFiber), size, mutRate, avgListSize, all, nihEnergy, nihProtein, nihCarb, nihFiber);
	}

	public Population(ArrayList<GList> pop, int size, int mutRate, int avgListSize, ArrayList<Item> all, float nihEnergy, float nihProtein, float nihCarb, float nihFiber) {

		setPop(pop);
		setSize(size);
		setMutRate(mutRate);
		setAvgListSize(avgListSize);
		setAll(all);
		setNihEnergy(nihEnergy);
		setNihProtein(nihProtein);
		setNihCarb(nihCarb);
		setNihFiber(nihFiber);
	}
	
	// Methods
	/**
	 * Generates an initial random population of grocery lists of varying size, but all around the same size.
	 * @return
	 */
	public static ArrayList<GList> generateInitPop(ArrayList<Item> all, int size, int avgListSize, float nihEnergy, float nihProtein, float nihCarb, float nihFiber) {
		ArrayList<GList> initPop = new ArrayList<GList>();
		// TODO generate a random initial population
		Random rn = new Random();
		int allSize = all.size(); 						// The total number of items
		int maxItems = avgListSize + (int) (Math.round(avgListSize * 0.25));	// The maximum number of items in our random GList
		int minItems = avgListSize - (int) (Math.round(avgListSize * 0.25));	// The minimum number of itmes in our random GList
		for (int i=1; i <= size; i++) {
			// Create a new random GList
			int numItems = rn.nextInt(maxItems - minItems + 1) + minItems;
			ArrayList<Item> ranItems = new ArrayList<Item>();
			for (int j=1; j <= numItems; j++) {
				// Generate random items for the GList
				int ranItemNum = rn.nextInt(allSize - 0 + 1) + 0; // generate a random Item Number between 0 and allSize (inclusive on both)
				Item ranItem = all.get(ranItemNum);
				ranItems.add(ranItem);
			}
			GList ranGList = new GList(ranItems, nihEnergy, nihProtein, nihCarb, nihFiber);
			initPop.add(ranGList);
		}
		return initPop;
	}
	public float[] incrementGen(String mode) {
		/* Selection Criteria: 
		 * 1. Top 10 lists stay
		 * 2. Top 50% breed randomly with each other
		 */
		ArrayList<GList> newGen = new ArrayList<GList>();
		ArrayList<GList> oldGen = getPop();
		
		Collections.sort(oldGen);
		float totalFitness = 0;
		for (GList glist : oldGen) {
			totalFitness += glist.getFitness();
		}
		float avgFit = totalFitness/oldGen.size();
		float bestFit = oldGen.get(0).getFitness();
		// System.out.println("Average Fitness: " + avgFit);
		// System.out.println("Best    Fitness: " + bestFit);
		
		// Keep the top 10 algorithms
		for (int i = 0; i < 10; i++) {
			newGen.add(oldGen.get(i));
		}
		
		// Top 50% breed randomly
		Random ran = new Random();
		int top50Num = (int) Math.round(0.5 * getSize());
		while (newGen.size() <= getSize()) {
			// Randomly choose two parent GLists
			int ranNum1 = ran.nextInt(top50Num - 0 + 1) + 0;
			int ranNum2 = ran.nextInt(top50Num - 0 + 1) + 0;
			GList parent1 = oldGen.get(ranNum1);
			GList parent2 = oldGen.get(ranNum2);
			GList child = breed(parent1, parent2);
			newGen.add(child);
		}
		
		setPop(newGen);
		float[] stats = new float[] {avgFit, bestFit};
		return stats;
	}
	private GList breed(GList parent1, GList parent2) {
		// TODO recombination
		
		// Find the largest parent
		ArrayList<Item> largeParent = parent1.getGlist();
		ArrayList<Item> smallParent = parent2.getGlist();
		if (parent2.getGlist().size() > largeParent.size()) {
			largeParent = parent2.getGlist();
			smallParent = parent1.getGlist();
		}
		
		// Randomly take an item either from parent1 or parent2
		Random ran = new Random();
		ArrayList<Item> childItems = new ArrayList<Item>();
		for (int i = 0; i < largeParent.size(); i++) {
			Item childItem;
			if (ran.nextBoolean() && i < smallParent.size())
				childItem = smallParent.get(i);
			else
				childItem = largeParent.get(i);
			
			// Random chance to mutate
			int ranNum1 = ran.nextInt(mutRate - 1 + 1) + 1;
			int ranNum2 = ran.nextInt(mutRate - 1 + 1) + 1;
			int ranItemNum = ran.nextInt(getAll().size() - 0 + 1) + 0;
			if (ranNum1 == ranNum2)
				childItem = getAll().get(ranNum1);
			childItems.add(childItem);
		}
		GList child = new GList(childItems, getNihEnergy(), getNihProtein(), getNihCarb(), getNihFiber());
		return child;
	}
	public GList findBest() {
		return getPop().get(0);
	}
	
	// Getters and Setters
	public ArrayList<GList> getPop() 			{	return pop;		}
	public void setPop(ArrayList<GList> pop) 	{	this.pop = pop;	}
	
	public static int getSize() 				{	return size;			}
	public void setSize(int size) 				{	Population.size = size;	}
	
	public int getMutRate() 					{	return mutRate;					}
	public void setMutRate(int mutRate) 		{	Population.mutRate = mutRate;	}

	public int getAvgListSize() 				{	return avgListSize;						}
	public void setAvgListSize(int avgListSize) {	Population.avgListSize = avgListSize;	}

	public static ArrayList<Item> getAll() 		{	return all;				}
	public void setAll(ArrayList<Item> all) 	{	Population.all = all;	}
	
	public static float getNihEnergy() 			{	return nihEnergy;					}
	public void setNihEnergy(float nihEnergy) 	{	Population.nihEnergy = nihEnergy;	}
	
	public static float getNihProtein() 		{	return nihProtein;					}
	public void setNihProtein(float nihProtein) {	Population.nihProtein = nihProtein;	}
	
	public static float getNihCarb() 			{	return nihCarb;				}
	public void setNihCarb(float nihCarb) 		{	Population.nihCarb = nihCarb;	}
	
	public static float getNihFiber() 			{	return nihFiber;				}
	public void setNihFiber(float nihFiber) 	{	Population.nihFiber = nihFiber;	}

	@Override
	public String toString() {
		String newString = "";
		Collections.sort(pop);
		for (GList glist : pop) {
			newString += glist;
			newString += "\n";
		}
		return newString;
	}
}
