@foreach ($courses as $course )
    <article>
        <h1>
            <a href="/courses/{{ $course->id }}">
                {{ $course->title}}
            </a>
            {{-- <a href="/categories/{{ $course->category->name }}">{{ $course->category->name}}</a> --}}
        </h1>
        <div class="">
            {{ $course->iscomplete}}
        </div>
    </article>
@endforeach
