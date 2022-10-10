<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>テニスラケットレビュー</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>テニスラケットレビュー</h1>
        <h2>
            ピュアアエロ（２０１９）
        </h2>
        <div>
            みんなの評価
            <p>
                ＜打感＞：硬い
            </p>
            <p>
                ＜性能＞：スピード、スピン
            </p>
        </div>
        
        
        
        <p>
            すべては新たな戦いに臨むために。「ピュアアエロ」が劇的にバージョンアップ
        </p>    

<p>
「ピュアアエロ」シリーズとして２世代目となる2019モデルは、</br>
複合素材や振動対策のエキスパート企業の先進技術を応用。</br>
その圧倒的なスピン性能には、さらなるコントロールと安定性を。そしてエアロラケットならではの強烈なパワーを落とすことなく、</br>
よりピュアで、よりダイレクトな打球感を実現し、スピンで戦うすべての者たちとともに、新たな戦いに臨みます。</br>
　　ーより強烈なスピン性能で、新たな伝説を創る、次世代エアロラケット。</br>
</p>
<p>
　　＜メーカー希望価格、メーカー公表スペック＞
</p>
     
        <a href="/posts/login">ログイン</a>
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='posts'>
                    <p class='body'>{{ $post->body }}</p>
                </div>
            @endforeach
        </div>
        
        <form action="/" method="POST">
                @csrf
                <div class="flex mt-2">
                    <p class="font-bold">使用ガット、推奨ガット</p>
                    <input class="border rounded px-2 ml-2 flex-auto" type="text" name="message_title">
                </div>
                <div class="flex flex-col mt-2">
                    <p class="font-bold">本文</p>
                    <textarea class="border rounded px-2" name="message"></textarea>
                </div>
                <div class="flex justify-end mt-2">
                    <input class="my-2 px-2 py-1 rounded bg-blue-300 text-blue-900 font-bold link-hover cursor-pointer" type="submit" value="投稿">
                </div>
            </form>
        </div>
    </body>
</html>