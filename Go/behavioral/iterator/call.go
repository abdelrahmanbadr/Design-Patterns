package main

import . "./iterator"

import (
	"fmt"
)

func main() {

	slice := []string{"a", "b", "c", "d"}
	container := &ConcreateContainer{slice}
	fmt.Println(container)
	for i := container.GetIterator(); i.HasNext(); {
		v := i.Next()
		fmt.Println(v)
	}
}
