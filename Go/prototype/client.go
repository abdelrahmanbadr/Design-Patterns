package prototype

import "fmt"

func GetClone(){
	prototype := &ConcretePrototype{"prototype1"}
	fmt.Println(prototype)
	fmt.Println(prototype.Clone())
}

