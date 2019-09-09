package fitlist;
import java.util.ArrayList;
import fitlist.Item;

public class GList implements Comparable<GList> {
	// Attributes
	private ArrayList<Item> glist; 	// ArrayList of items for a grocery list
	private int fitness; 			// Fitness of this list
	private float nihEnergy;		// NIH's recommended Energy intake
	private float nihProtein;		// "		"		 Protein	"
	private float nihCarb;			// "		"		 Carb		"
	private float nihFiber;			// "		"		 Fiber		"
	
	// Constructors
	public GList(ArrayList<Item> glist, float nihEnergy, float nihProtein, float nihCarb, float nihFiber) {
		super();
		
		setGlist(glist);
		// System.out.println(nihEnergy);
		setNihEnergy(nihEnergy);
		setNihProtein(nihProtein);
		setNihCarb(nihCarb);
		setNihFiber(nihFiber);
		setFitness();
	}
	
	// Getters and Setters
	public ArrayList<Item> getGlist() 			{	return glist;		}
	public void setGlist(ArrayList<Item> glist) {	this.glist = glist;	}
	
	// TODO write a good setFitness method
	public int getFitness() 					{	return fitness;		}
	public void setFitness() {	
		float totalEnergy 	= sum("energy");
		float totalProtein 	= sum("protein");
		float totalCarb		= sum("carb");
		float totalFiber	= sum("fiber");
		
		float energyError 	= Math.abs(nihEnergy 	- totalEnergy);
		float proteinError 	= Math.abs(nihProtein 	- totalProtein);
		float carbError 	= Math.abs(nihCarb 		- totalCarb);
		float fiberError 	= Math.abs(nihFiber 	- totalFiber);
		
		// Normalize the error.
		// A score of 25 is optimal for a nutrient, meaning there's 0 error.
		// Even if a nutrient overshoots, the score will be below 25.
		// This makes it easy for final comparison. A score of 100 is optimal.
		float energyScore 	= 25 * (nihEnergy 	- energyError) 	/ nihEnergy;
		float proteinScore 	= 25 * (nihProtein 	- proteinError) / nihProtein;
		float carbScore 	= 25 * (nihCarb 	- carbError) 	/ nihCarb;
		float fiberScore 	= 25 * (nihFiber 	- fiberError) 	/ nihFiber;
		
//		System.out.println("energyScore = " + energyScore);
//		System.out.println("proteinScore = " + proteinScore);
//		System.out.println("carbScore = " + carbScore);
//		System.out.println("fiberScore = " + fiberScore);
		this.fitness = Math.round(energyScore + proteinScore + carbScore + fiberScore);
	}
	
	public float getNihEnergy() 				{	return nihEnergy;			}
	public void setNihEnergy(float nihEnergy) 	{	this.nihEnergy = nihEnergy;	}
	
	public float getNihProtein() 				{	return nihProtein;				}
	public void setNihProtein(float nihProtein) {	this.nihProtein = nihProtein;	}
	
	public float getNihCarb() 					{	return nihCarb;			}
	public void setNihCarb(float nihCarb) 		{	this.nihCarb = nihCarb;	}
	
	public float getNihFiber() 					{	return nihFiber;			}
	public void setNihFiber(float nihFiber) 	{	this.nihFiber = nihFiber;	}
	
	
	// Methods
	private float sum(String nutrient) {
		float sum = 0;
		for (Item item : glist) {
			switch (nutrient) {
			case "energy":
				sum += item.getEnergy();
				break;
			case "protein":
				sum += item.getProtein();
				break;
			case "carb":
				sum += item.getCarb();
				break;
			case "fiber":
				sum += item.getFiber();
				break;
			default:
				System.out.println("Error: not a valid nutrient: " + nutrient);
			}
		}
		return sum;
	}
	
	public String findEnergy() {
		String newString = "";
		for (Item item : glist) {
			newString += item.getEnergy();
			newString += ",";
		}
		return newString.substring(0, newString.length()-1);
	}
	
	public String findProtein() {
		String newString = "";
		for (Item item : glist) {
			newString += item.getProtein();
			newString += ",";
		}
		return newString.substring(0, newString.length()-1);
	}
	
	public String findCarb() {
		String newString = "";
		for (Item item : glist) {
			newString += item.getCarb();
			newString += ",";
		}
		return newString.substring(0, newString.length()-1);
	}
	
	public String findFiber() {
		String newString = "";
		for (Item item : glist) {
			newString += item.getCarb();
			newString += ",";
		}
		return newString.substring(0, newString.length()-1);
	}
	
	public String findNames() {
		String newString = "";
		for (Item item : glist) {
			newString += item.getName();
			newString += "|";
		}
		return newString.substring(0, newString.length()-1);
	}

	@Override
	public String toString() {
		String newString = "";
		for (Item item : glist) {
			newString += item.getId();
			newString += ",";
		}
		return newString.substring(0, newString.length()-1);
	}
	
	@Override
	public int compareTo(GList other) {
		return other.getFitness() - this.getFitness();
	}
	
	
	
	@Override
	public boolean equals(Object obj) {
        if (!(obj instanceof GList)) { 
            return false; 
        } 
        GList gl = (GList) obj;
        ArrayList<Item> items = gl.getGlist();
        
        String thisString = this.toString();
        for (Item i : items) {
        	String itemId = "" + i.getId();
        	if (!thisString.contains(itemId)) {
        		return false;
        	}
        }
        return true;
	}

	public float[] getDailyNutrientPct() {
		float totalEnergy 	= sum("energy");
		float totalProtein 	= sum("protein");
		float totalCarb		= sum("carb");
		float totalFiber	= sum("fiber");
		
//		float energyError 	= Math.abs(nihEnergy 	- totalEnergy);
//		float proteinError 	= Math.abs(nihProtein 	- totalProtein);
//		float carbError 	= Math.abs(nihCarb 		- totalCarb);
//		float fiberError 	= Math.abs(nihFiber 	- totalFiber);
//		
//		float energyPct 	= 25 * (nihEnergy 	- energyError) 	/ nihEnergy;
//		float proteinPct 	= 25 * (nihProtein - proteinError) / nihProtein;
//		float carbPct 		= 25 * (nihCarb 	- carbError) 	/ nihCarb;
//		float fiberPct 		= 25 * (nihFiber 	- fiberError) 	/ nihFiber;
		
		float energyPct 	= totalEnergy 	/ nihEnergy;
		float proteinPct 	= totalProtein 	/ nihProtein;
		float carbPct 		= totalCarb 	/ nihCarb;
		float fiberPct 		= totalFiber 	/ nihFiber;
		
		
		float[] dailyNutrientPct = new float[] {energyPct, proteinPct, carbPct, fiberPct};
		return dailyNutrientPct;
	}
	
	
}
