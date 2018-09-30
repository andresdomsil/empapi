@extends('base')

@section('container')
    <section class="posts container">
    	@foreach($news as $new)
        <article class="post">
    	    @if($new->foto != null)
                <figure>
                	<img src="/img/noticias/{{$new->foto}}" alt="" class="img-responsive">
                </figure>
                <!-- elseif($port->iframe)
                    <div class="video">
                        {!$port->iframe!!}
                    </div>-->
                @endif
                <div class="content-post">
                    <header class="container-flex space-between">
                        <div class="date">
                              <span class="c-gray-1">{{$new->fecha->format('Y M d')}}</span>
                        </div>
                        <div class="post-category">
                            <span class="category text-capitalize"><a href="#">{{$new->category->name}}</a></span>
                        </div>
                    </header>
                    <h1>{{$new->title}}</h1>
                    <div class="divider"></div>
                    <p>{!!$new->excerpt!!}</p>
                    <p><a href="{{$new->link}}">Link</a></p>
                </div>
        </article>
        @endforeach
    </section>
@endsection
