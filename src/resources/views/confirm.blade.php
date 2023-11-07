<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>内容確認</title>
    <link rel="stylesheet" href="/confirm.css">
</head>
<body>
    <div class="content-confirm">
        <div class="page_title">
            <h2>内容確認</h2>
        </div>
        <div>
            <table class="confirm_table">
                <tr>
                    <th class="confirm_item">お名前</th>
                    <td><input type="text" name="last_name" value="{{ $contact['last_name'] }}" readonly><input type="text" name="first_name" value="{{ $contact['first_name']}}" readonly></td>
                </tr>
                <tr>
                    <th class="confirm_item">性別</th>
                    <td></td>
                </tr>
                <tr>
                    <th class="confirm_item">メールアドレス</th>
                    <td><input type="email" name="email" value="{{ $contact['email'] }}" readonly></td>
                </tr>
                <tr>
                    <th class="confirm_item">郵便番号</th>
                    <td><input type="text" name="postcode" value="{{ $contact['postcode'] }}" readonly></td>
                </tr>
                <tr>
                    <th class="confirm_item">住所</th>
                    <td><input type="text" name="address" value="{{ $contact['address'] }}" readonly></td>
                </tr>
                <tr>
                    <th class="confirm_item">建物名</th>
                    <td><input type="text" name="building_name" value="{{ $contact['building_name'] }}" readonly></td>
                </tr>
                <tr>
                    <th class="confirm_item">ご意見</th>
                    <td><input type="text" name="opinion" value="{{ $contact['opinion'] }}" readonly></td>
                </tr>
            </table>
            <form action="">
                @csrf
                <div class="button">
                    <button class="send_button">送信</button>
                </div>
                <div class="button">
                    <button class="fix_button">修正する</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>