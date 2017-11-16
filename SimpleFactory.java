
// simple factory

public class PizzaStore {
    public Pizza orderPizza(String name) {
        Pizza pizza ;
        // but this part will alwayse change
        //changable behaviour must be encapsulated
        if (name == 'tona') {
            pizza = new tona();
        } else if (name == 'chees') {
            pizza= new chees();
        }
        else if (name == 'meat') {
            pizza= new meat();
        }

        pizza.prepare();
        pizza.bake();
        pizza.cut();
        pizza.box();

        return pizza
    }
}
////////////////////////////////////////////
//encapsulation object creation
public class SimplePizzaFactory {
    public Pizza createPizza(String name) 
    {
        if (name == 'tona') {
            return new tona();
        } else if (name == 'chees') {
            return  new chees();
        }
        else if (name == 'meat') {
            return new meat();
        }

        return null;
    }
}
public class PizzaStore {
    SimplePizzaFactory factory;
    public PizzaStore(SimplePizzaFactory factory){
    this.factory = factory;
    }
    public Pizza orderPizza(String name) {
       
        Pizza pizza =this.factory.createPizza(name);

        pizza.prepare();
        pizza.bake();
        pizza.cut();
        pizza.box();

        return pizza
    }
}
