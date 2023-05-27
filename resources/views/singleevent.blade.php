<x-headerfooter>
    <section class="event-details">
        <div class="container">
            <div class="card">
                <img src="{{ asset('images/eventhub.jpg') }}" class="card-img-top" alt="Event Image">
                <div class="card-body">
                    <h5 class="card-title">{{ $event->title }}</h5>
                    <p class="card-text">Location: {{ $event->location }}</p>
                    <p class="card-text">Start Date: {{ $event->start_date }}</p>
                    <p class="card-text">Description: {{ $event->description }}</p>
                    <div class="d-flex justify-content-end">
                        <a href="/editpage/{{ $event->id }}" class="btn btn-primary mr-2">Edit</a>
                        <form action="/delete/{{ $event->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-headerfooter>
