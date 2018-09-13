package observer

func CallObserver() {
	user := &User{}
	ev := Event{}
	ev.New("Event Info")
	ev.AddObserver(user)
	ev.NotifyObservers()
}
