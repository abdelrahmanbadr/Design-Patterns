package strategy

type IStrategy interface {
	Execute(int, int) int
}
type Add struct{}

func (self *Add) Execute(a, b int) int {
	return a + b
}

type Subtract struct{}

func (self *Subtract) Execute(a, b int) int {
	return a - b
}

type Multiply struct{}

func (self *Multiply) Execute(a, b int) int {
	return a * b
}

type Context struct {
	strategy IStrategy
}

func (self *Context) SetStrategy(strategy IStrategy) {
	self.strategy = strategy
}

func (self *Context) Calc(a, b int) int {
	return self.strategy.Execute(a, b)
}

// func call() {
// 	ctx := new(Context)
// 	ctx.SetStrategy(new(Add))
// 	ctx.Calc(3, 4)
// 	ctx.SetStrategy(new(Subtract))
// 	ctx.Calc(8, 4)
// }
