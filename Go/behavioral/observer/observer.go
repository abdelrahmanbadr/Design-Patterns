package observer

//subscriber
type IObserver interface {
	Update(subj ISubject)
}
