/// this class has aggragation relationship with strategy class
public class Manager{
     private Strategy strategy;
    public Manager(Strategy strategy){
        this.strategy=strategy;
    }
     public int getBill(int num1){
      return strategy.getBill(num1);
   }
}
