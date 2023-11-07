<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせ</title>
    <link rel="stylesheet" href="/index.css">
    <script src="https://yubinbango.github.io/yubinbango/yubinbango.js" charset="UTF-8"></script>
</head>
<body>
    <div class="contact-form">
        <div class="form-title">
            <h1>お問い合わせ</h1>
        </div>
        <form class="h-adr form" name="contact" action="/confirm" method="post">
            @csrf
            <div class="form-item">
                <p class="item-name">お名前<span>※</span></p>
                <div class="form-box_item">
                    <div class="form-box">
                        <input type="text" class="form-input" name="last_name">
                        <input type="text" class="form-input" name="first_name">
                        @if ($errors->has('fullname'))
                        <p class="required">{{ $errors->first('fullname') }}</p>
                        @endif
                    </div>
                    <div class="form-example">
                        <p class="name_placeholder">例）山田</p>
                        <p class="name_placeholder">例）太郎</p>
                    </div>
                </div>
            </div>
            <div class="form-item">
                <p class="item-name">性別<span>※</span></p>
                <div class="form-box_item">
                    <div class="form-box_select">
                    <label><input class="select-gender" type="radio" name="gender" checked>男性</label>
                    <label><input class="select-gender" type="radio" name="gender">女性</label>
                    </div>
                </div>
            </div>
            <div class="form-item">
                <p class="item-name">メールアドレス<span>※</span></p>
                <div class="form-box_item">
                    <div class="form-box">
                        <input type="email" class="form-input" name="email">
                        @if($errors->has('email'))
                        <p class="required">{{ $errors->first('email') }}</p>
                        @endif
                    </div>
                    <p class="name_placeholder">例）test@example.com</p>
                </div>
            </div>
            <div class="form-item">
                <p class="item-name">郵便番号<span>※</span></p>
                <div class="form-box_item">
                    <div class="form-box">
                        <input type="hidden" class="p-country-name" value="Japan">
                        〒<input type="text" class=" form-input p-postal-code" name="postcode">
                        @if($errors->has('postcode'))
                        <p class="required">{{ $errors->first('postcode') }}</p>
                        @endif
                    </div>
                    <p class="name_placeholder">例）123-4567</p>
                </div>
            </div>
            <div class="form-item">
                <p class="item-name">住所<span>※</span></p>
                <div class="form-box_item">
                    <div class="form-box">
                        <input type="text" class="form-input p-region p-locality p-street-address p-extended-address" name="address">
                        @if($errors->has('address'))
                        <p class="required">{{ $errors->first('address') }}</p>
                        @endif
                    </div>
                        <p class="name_placeholder">例）東京都渋谷区千駄ヶ谷1-2-3</p>
                </div>
            </div>
            <div class="form-item">
                <p class="item-name">建物名</p>
                <div class="form-box_item">
                    <div class="form-box">
                        <input type="text" class="form-input">
                    </div>
                    <p class="name_placeholder">例）千駄ヶ谷マンション101</p>
                </div>
            </div>
            <div class="form-item">
                <p class="item-name">ご意見<span>※</span></p>
                <div class="form-box_item">
                    <div class="textarea-box">
                        <textarea cols="30" rows="10" class="textarea-input" name="opinion"></textarea>
                        @if($errors->has('opinion'))
                        <p class="required">{{ $errors->first('opinion') }}</p>
                        @endif
                    </div>
                </div>
            </div>
            <div class="confirm">
                <button class="confirm-button">確認</button>
            </div>
        </form>
    </div>
</body>
</html>