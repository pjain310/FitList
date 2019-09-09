package fitlist;

public class Item {
	// Attributes
	private int id;
	private float energy;
	private float protein;
	private float carb;
	private float fiber;
	private String name;
	
	// Constructors	
	public Item(int id, float energy, float protein, float carb, float fiber, String name) {
		super();
		setId(id);
		setEnergy(energy);
		setProtein(protein);
		setCarb(carb);
		setFiber(fiber);
		setName(name);
	}
	
	// Getters and Setters
	public int getId() 						{	return id;		}
	public void setId(int id) 				{	this.id = id;	}
	
	public float getEnergy()				{	return energy;			}
	public void setEnergy(float energy)		{	this.energy = energy;	}
	
	public float getProtein() 				{	return protein;			}
	public void setProtein(float protein) 	{	this.protein = protein;	}
	
	public float getCarb() 					{	return carb;		}
	public void setCarb(float carb) 		{	this.carb = carb;	}

	public float getFiber() 				{	return fiber;		}
	public void setFiber(float fiber) 		{	this.fiber = fiber;	}
	
	public String getName()					{	return name;		}
	public void setName(String name) 		{	this.name = name;	}

	@Override
	public String toString() {
		return "Item [id=" + id + ", energy=" + energy + ", protein=" + protein + ", carb=" + carb + ", fiber=" + fiber
				+ ", name=" + name + "]";
	}
	
}
