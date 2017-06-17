public class Milk implements Drink{
    public Drink drink;
    
    public Milk(Drink drink){
        this.drink=drink;
    }
  public int getCost(){
      return drink.getCost()+10;
  }
  public String getDesc(){
   return drink.getDesc()+"MILK";
  }
  
}