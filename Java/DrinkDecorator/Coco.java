public class Coco implements Drink{
    public Drink drink;
    
    public Coco(Drink drink){
        this.drink=drink;
    }
  public int getCost(){
      return drink.getCost()+15;
  }
  public String getDesc(){
   return drink.getDesc()+"coco";
  }
  
}