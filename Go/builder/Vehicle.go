package builder

import "fmt"

//type Vehicle struct {
//	topSpeed int
//	color    string
//}
type Vehicle struct {
	Wheels    int
	Seats     int
	TopSpeed int
	Structure string
}
type IVehilce interface {
	AcclerateSpeed(speed int) string
}
func (v Vehicle) AcclerateSpeed(speed int) {
fmt.Println("speed of ",v.Structure," is ",speed, "instead of ",v.TopSpeed)
}