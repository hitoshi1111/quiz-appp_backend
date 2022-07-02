<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Quiz;

class QuizTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Quiz::truncate();

        $quizs =  [
            // [テンプレート
            //     'title_id' => 1,
            //     'question' => '',
            //     'answer1' => '',
            //     'answer2' => '',
            //     'answer3' => '',
            //     'answer4' => '',
            //     'answer5' => '',
            //     'answer' => 1,
            //     'description' => '今はまだなし'
            // ],
            [
                'title_id' => 1,
                'question' => '米国継承英語辞典(The American Heritage Dictionary) の第 3 版では，バーチャルとは，
                「existing in ( ) or effect though not in actual fact or form」と定義されている．',
                'answer1' => 'appearance',
                'answer2' => 'essence',
                'answer3' => 'nature',
                'answer4' => 'observance',
                'answer5' => 'relality',
                'answer' => 2,
                'description' => '今はまだなし'
            ],
            [
                'title_id' => 1,
                'question' => 'バーチャルリアリティの三要素として正しいものは( )である',
                'answer1' => '実用性，実現性，実際性',
                'answer2' => '実時間の相互作用性，3 次元の空間性，自己投射性',
                'answer3' => '有用性，再現性，新規性',
                'answer4' => ' 実時間の空間性，3 次元空間の相互作用性，自己投射性',
                'answer5' => '',
                'answer' => 2,
                'description' => '今はまだなし'
            ],
            [
                'title_id' => 1,
                'question' => 'バーチャルリアリティは，さしずめ，3C と 3E のための道具 (human tools for 3Cs and
                3Es) である．3C とは， ( 1 ) , Control, Communication であり，3E は，Elucidation,
                Education, ( 2 ) である．
                【1を回答】',
                'answer1' => 'Cooperation',
                'answer2' => 'Community',
                'answer3' => 'Correspondence',
                'answer4' => 'Creation',
                'answer5' => 'Comfort',
                'answer' => 4,
                'description' => '(1) Creation, (2) Entertainment'
            ],
            [
                'title_id' => 1,
                'question' => 'バーチャルリアリティは，さしずめ，3C と 3E のための道具 (human tools for 3Cs and
                3Es) である．3C とは， ( 1 ) , Control, Communication であり，3E は，Elucidation,
                Education, ( 2 ) である．
                【2を回答】',
                'answer1' => 'Expenditure',
                'answer2' => 'Emergence',
                'answer3' => 'Evacuation',
                'answer4' => 'Entertainment',
                'answer5' => 'Essence',
                'answer' => 4,
                'description' => ''
            ],
            [
                'title_id' => 1,
                'question' => 'VR とヒューマンインタフェースの関係について，正しいものは ( ) である．',
                'answer1' => 'ヒューマンインタフェースは，VR の技術がなければ十分な構成を実現できない．',
                'answer2' => 'VR のインタラクションにおけるインタフェースは，ヒューマンインタフェース設計
                での人に優しい装置設計の立場とは相いれないものである．',
                'answer3' => 'ヒューマンインタフェースの構成方針を用いると，VR の運動計測は非常に困難とな
                る．',
                'answer4' => '入力装置の必要性では，VR とヒューマンインタフェースではかなり大きな相違があ
                る．',
                'answer5' => 'VR では，ユーザと対象世界の関係は，従来のヒューマンインタフェースのような対
                面的関係より包含的関係である．',
                'answer' => 5,
                'description' => ''
            ],
            [
                'title_id' => 2,
                'question' => '（ a ）はもっとも一般的なヘッドマウンテッドディスプレイ（Head Mounted
                Display：HMD）であり，小型化のために自由曲面プリズム（free-form prism）などを用
                いる場合がある．',
                'answer1' => '網膜投影ディスプレイ（display）',
                'answer2' => '頭部搭載型プロジェクタ（HMPD, head mounted projective display）',
                'answer3' => '接眼光学系による HMD',
                'answer4' => 'ホログラフィック光学素子（HOE, holographic optical element）による HMD',
                'answer5' => '自由曲面プリズム（free-form prism）',
                'answer' => 3,
                'description' => ''
            ],
            [
                'title_id' => 2,
                'question' => '（ b ）は水晶体の屈折力を用いないため視距離によらず鮮明な映像を観察できる利
                点がある．',
                'answer1' => '網膜投影ディスプレイ（display）',
                'answer2' => '頭部搭載型プロジェクタ（HMPD, head mounted projective display）',
                'answer3' => ' 接眼光学系による HMD',
                'answer4' => ' ホログラフィック光学素子（HOE, holographic optical element）による HMD',
                'answer5' => '自由曲面プリズム（free-form prism）',
                'answer' => 1,
                'description' => ''
            ],
            [
                'title_id' => 2,
                'question' => '（また，（ c ）は波長選択性の特徴により透過度が高く，広い両眼視野を確保できる
                利点がある．',
                'answer1' => '網膜投影ディスプレイ（display）',
                'answer2' => '頭部搭載型プロジェクタ（HMPD, head mounted projective display）',
                'answer3' => ' 接眼光学系による HMD',
                'answer4' => ' ホログラフィック光学素子（HOE, holographic optical element）による HMD',
                'answer5' => '自由曲面プリズム（free-form prism）',
                'answer' => 3,
                'description' => ''
            ],
            [
                'title_id' => 2,
                'question' => 'さらに，（ d ）は特殊なスクリーン（screen）を要する制約はあるが，接眼光学系
                に起因する映像歪みが存在しないという利点がある．
                ',
                'answer1' => '網膜投影ディスプレイ（display）',
                'answer2' => '頭部搭載型プロジェクタ（HMPD, head mounted projective display）',
                'answer3' => ' 接眼光学系による HMD',
                'answer4' => ' ホログラフィック光学素子（HOE, holographic optical element）による HMD',
                'answer5' => '自由曲面プリズム（free-form prism）',
                'answer' => 1,
                'description' => ''
            ],
            [
                'title_id' => 3,
                'question' => 'Googleが作ったフレームワークはどれ？',
                'answer1' => 'Vue.js',
                'answer2' => 'AngularJS',
                'answer3' => 'React',
                'answer4' => 'jQuery',
                'answer5' => '',
                'answer' => 2,
                'description' => 'AngularJSですよー'
            ],
            [
                'title_id' => 3,
                'question' => 'HTTP通信を行うためによく使われるライブラリはどれ？',
                'answer1' => 'axios',
                'answer2' => 'Lodash',
                'answer3' => 'Moment.js',
                'answer4' => 'D3.js',
                'answer5' => '',
                'answer' => 1,
                'description' => '他の選択肢は全然Ajaxのライブラリではないですよ。'
            ],
            [
                'title_id' => 3,
                'question' => 'JavaScript以外のプログラミング言語でフロントエンドを構築するための技術は何？',
                'answer1' => 'web3.0',
                'answer2' => 'NoCode',
                'answer3' => 'WebAssembly',
                'answer4' => 'PWA',
                'answer5' => '',
                'answer' => 1,
                'description' => 'ちょっと難しかったかなぁ？'
            ],
            [
                'title_id' => 3,
                'question' => '次のうち、最終的にJavaScriptにコンパイルされる言語でないものはどれ？',
                'answer1' => 'TypeScript',
                'answer2' => 'CoffeScript',
                'answer3' => 'Dart',
                'answer4' => 'PureScript',
                'answer5' => '',
                'answer' => 3,
                'description' => ''
            ],
            [
                'title_id' => 3,
                'question' => '次のうち、TypeScriptの特徴でないものはどれ？',
                'answer1' => '性的型付け言語である',
                'answer2' => 'enumが使える',
                'answer3' => 'JavaScriptのスーパーセットである',
                'answer4' => 'オブジェクト志向的書き方ができる',
                'answer5' => '',
                'answer' => 1,
                'description' => '性的とかw'
            ],
            [
                'title_id' => 4,
                'question' => '一般的にギターには何本の弦が張られている？',
                'answer1' => '4本',
                'answer2' => '3本',
                'answer3' => '5本',
                'answer4' => '6本',
                'answer5' => '',
                'answer' => 4,
                'description' => '4本はベースかな。3本は三味線かな。'
            ],
            [
                'title_id' => 4,
                'question' => '3弦の開放弦の音は何？',
                'answer1' => 'C',
                'answer2' => 'E',
                'answer3' => 'D',
                'answer4' => 'G',
                'answer5' => '',
                'answer' => 4,
                'description' => 'ソの音だね。'
            ],
            [
                'title_id' => 4,
                'question' => 'ベース音と5度の2音だけを出すコードのことを何という？',
                'answer1' => 'アッパーストラクチャー',
                'answer2' => 'テンションコード',
                'answer3' => 'パワーコード',
                'answer4' => 'トライアドコード',
                'answer5' => '',
                'answer' => 3,
                'description' => 'ロックでよく使われるけど、くるりのボーカルの人は使わないよ。'
            ],
            [
                'title_id' => 4,
                'question' => '布袋寅泰やJudy&MaryのTAKUYAが使うギターの種別は何？',
                'answer1' => 'ストラトキャスター',
                'answer2' => 'テレキャスター',
                'answer3' => 'レスポール',
                'answer4' => 'アコースティック',
                'answer5' => '',
                'answer' => 2,
                'description' => 'まぁアコギも使うんだろうけどさ。'
            ],
            [
                'title_id' => 4,
                'question' => 'ピッキングせずに指を弦に押さえつけるだけで音を出す奏法を何という？',
                'answer1' => 'ハンマリングオン',
                'answer2' => 'プリングオフ',
                'answer3' => 'チョーキング',
                'answer4' => 'アーミング',
                'answer5' => '',
                'answer' => 1,
                'description' => 'どうなんやろね。'
            ]
        ];
        
        foreach($quizs as $quiz) {
            Quiz::create($quiz);
        }
    }
}
