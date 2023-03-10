@extends("layouts.app")
@section("title", "新規投稿 | 一日一行日記")
@section("body")
    <!-- container -->
    <div class="container post">
        <!-- site header -->
        <!-- content -->
        <div class="content">
            <!-- main contents -->
            <main>
                <!-- 1つ目のセクション -->
                <section id="section-1">
                    <div class="tit">
                        <h1>
                            新規投稿
                        </h1>
                    </div>
                    <form action="{{ route('postDiary') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-item">
                            <label for="diary"><i class="fa-solid fa-pencil"></i>&nbsp;今日の一行</label>
                            <input type="text" name="diary" id="diary" maxlength="200" value="{{ old('diary') }}" required>
                            <div class="alert-danger">
                                @if($errors->has('diary'))
                                    {{ $errors->first('diary') }}
                                @endif
                            </div>
                        </div>
                        <div class="form-item">
                            <label for="img"><i class="fa-regular fa-image"></i>&nbsp;画像</label>
                            <input type="file" name="img" id="img" accept="image/*">
                        </div>
                        <button type="submit">投稿</button>
                    </form>
                </section>
            </main>
        </div>
        <!-- /content -->
    </div>
    <!-- /container -->
@endsection