package main

import (
	. "Go/builder"
)

func main() {
	var vehicle VehicleBuilder
	d := &Director{}
	vehicle = &BikeBuilder{}
	d.Build(vehicle).AcclerateSpeed(180)
}
