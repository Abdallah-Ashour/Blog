@extends('layouts.main')

@section('content')
{{-- {{ $blog->slug }} --}}

        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <article class="post-item post-detail">
                        @if ($blog->imageUrl())
                        <div class="post-item-image">
                                <img src="{{ $blog->imageUrl() }}" alt="{{ $blog->title }}">
                        </div>

                        @endif

                        <div class="post-item-body">
                            <div class="padding-10">
                                <p>
                                </p>
                                <h1>{{ $blog->title }}</h1>

                                <div class="post-meta no-border">
                                    <ul class="post-meta-group">
                                        <li><i class="fa fa-user"></i><a href="#"> {{ $blog->user->name }}</a></li>
                                        <li><i class="fa fa-clock-o"></i><time>{{ $blog->date() }}</time></li>
                                        <li><i class="fa fa-folder"></i><a href="{{ route('category', $blog->category->slug) }}"> {{ $blog->category->title }}</a></li>
                                        <li><i class="fa fa-comments"></i><a href="#">4 Comments</a></li>
                                    </ul>
                                </div>

                                {{ $blog->body }}
                            </div>
                        </div>
                    </article>

                    <article class="post-author padding-10">
                        <div class="media">
                          <div class="media-left">
                            <a href="#">
                              <img alt="Author 1" src="/img/author.jpg" class="media-object">
                            </a>
                          </div>
                          <div class="media-body">
                            <h4 class="media-heading"><a href="#">{{ $blog->user->name }}</a></h4>
                            <div class="post-author-count">
                              <a href="#">
                                  <i class="fa fa-clone"></i>
                                  90 posts
                              </a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis ad aut sunt cum, mollitia excepturi neque sint magnam minus aliquam, voluptatem, labore quis praesentium eum quae dolorum temporibus consequuntur! Non.</p>
                          </div>
                        </div>
                    </article>

                    {{-- comments here --}}
                </div>

                @include('layouts._sidebar')
            </div>
        </div>
@endsection

