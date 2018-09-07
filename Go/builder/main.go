package main

import (
	"fmt"
)

type VehicleBuilder interface {
	TopSpeed(int) VehicleBuilder
	Paint(string) VehicleBuilder
	Build() VehicleBuilder
}

/////////////////////////

//product
type Vehicle struct {
	topSpeed int
	color    string
}

//////////////////////

type carBuilder struct {
	Vehicle
}

//////////////
func (car *carBuilder) TopSpeed(speed int) VehicleBuilder {
	car.topSpeed = speed
	return car
}

func (car *carBuilder) Paint(color string) VehicleBuilder {
	car.color = color
	return car
}

func (car *carBuilder) Build() VehicleBuilder {
	// return &CarBuilder{
	// 	topSpeed: cb.topSpeed,
	// 	color:    cb.color,
	// }
	return car
}

////////////////////////////////
// func New() *CarBuilder {
// 	return &CarBuilder{}
// }
func main() {
	builder := &carBuilder{}
	car := builder.TopSpeed(50).Paint("BLUE").Build()
	fmt.Println(car)
}
