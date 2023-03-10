@extends("layouts.app")
@section("title", "日記一覧 | 一日一行日記")
@section("body")
    <!-- container -->
    <div class="container diaries">
        <!-- site header -->
        <!-- content -->
        <div class="content">
            <!-- main contents -->
            <main>
                <!-- 1つ目のセクション -->
                <section id="section-1">
                    <div class="tit">
                        <h1>
                            日記一覧
                        </h1>
                    </div>
                    <div class="diaries">
                    @foreach($diaries as $diary)
                        <div class="diary">
                            @if(empty($diary->img_path))
                            <div class="box">
                                <p class="date">{{ $diary->created_at }}</p>
                                <div class="btn">
                                    <a href="edit/{{ $diary->id }}">編集する</a>
                                </div>
                                <p class="msg">No image</p>
                            </div>
                            @else
                            <div class="box">
                                <p class="date">{{ $diary->created_at }}</p>
                                <div class="btn">
                                    <a href="edit/{{ $diary->id }}">編集する</a>
                                </div>
                                <div class="img">
                                    <img src="{{ asset($diary->img_path) }}" alt="diary">
                                </div>
                            </div>
                            @endif
                            <div>
                                <p>{{ $diary->diary }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
                {!! $diaries->links() !!}
                </section>
            </main>
        </div>
        <!-- /content -->
    </div>
    <!-- /container -->
@endsection