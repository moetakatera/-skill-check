@extends("layouts.app")
@section("title", "ホーム | 一日一行日記")
@section("body")
    <!-- container -->
    <div class="container index">
        <!-- site header -->
        <!-- content -->
        <div class="content">
            @if (session('flash_message'))
                <div class="flash_message">
                    {{ session('flash_message') }}
                </div>
            @endif
            <div class="kv">
                <div class="img">
                    <img src="{{ asset('img/kv.jpg') }}" alt="">
                </div>
            </div>
            <!-- main contents -->
            <main>
                <!-- 1つ目のセクション -->
                <section id="section-1">
                    <div class="tit">
                        <h1>
                            一日一行、日記を書いてみませんか。
                        </h1>
                        <p>記憶や思い出、思考の整理、目標や改善、自己表現など...<br>思い付いたことを記してみるのも良いかもしれません。</p>
                    </div>
                </section>
            </main>
        </div>
        <!-- /content -->
    </div>
    <!-- /container -->
@endsection