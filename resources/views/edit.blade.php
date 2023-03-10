@extends("layouts.app")
@section("title", "日記編集 | 一日一行日記")
@section("body")
    <!-- container -->
    <div class="container edit">
        <!-- site header -->
        <!-- content -->
        <div class="content">
            <!-- main contents -->
            <main>
                <!-- 1つ目のセクション -->
                <section id="section-1">
                    <div class="tit">
                        <h1>
                            日記編集
                        </h1>
                    </div>
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-item">
                            <label for="diary"><i class="fa-solid fa-pencil"></i>&nbsp;今日の一行</label>
                            <input type="text" name="diary" id="diary" maxlength="200" value="{{ $postedDiary->diary }}" required>
                            <div class="alert-danger">
                                @if($errors->has('diary'))
                                    {{ $errors->first('diary') }}
                                @endif
                            </div>
                        </div>
                        <div class="form-item">
                            <label for="img"><i class="fa-regular fa-image"></i>&nbsp;画像</label>
                            <img src="{{ asset($postedDiary->img_path) }}" alt="diary">
                        </div>
                        <div class="form-item">
                            <input type="file" name="img" id="img" accept="image/*">
                        </div>
                        <button type="submit">編集する</button>
                    </form>
                </section>
            </main>
        </div>
        <!-- /content -->
    </div>
    <!-- /container -->
@endsection