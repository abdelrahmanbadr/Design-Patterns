public class Animal{
    private String name;
    private Ifly flyObj;
    public void setName(String name){
        this.name=name;
    }
    public String getName(){
        return this.name;
    }
    public void setFly(Ifly flyType){
        this.flyObj=flyType;
        
    }
    public void fly(){
         this.flyObj.fly();
    }
    
}