package observer

//publisher
type ISubject interface {
	AddObserver(o IObserver)
	RemoveObserver(o IObserver)
	NotifyObservers()
	GetInfo() string
}
