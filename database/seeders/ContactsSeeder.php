<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contact;
use Carbon\Carbon;

class ContactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'fullname' => '小椋 光',
            'gender' => 9,
            'email' => 'yingadkmyhikaru86532@kukj.khkbd.yh',
            'postcode' => '252-0243',
            'address' => '神奈川県相模原市中央区上溝4-6-11',
            'building_name' => '',
            'opinion' => '私は事実とうとうとこの経過人に対しての伝える時がきた。' . '¥n' . 'まして今に引き目にみてもまあその話ただでを記述しても発展の役に立たないまでも、それほどに有用になったのですな。',
            'created_at' => new Carbon('2021-12-25 05:06:07')
        ];
        Contact::create($param); //1

        $param = [
            'fullname' => '小池 初太郎',
            'gender' => 1,
            'email' => 'hatsutarou876@uqsidnl.wgf.un',
            'postcode' => '882-0403',
            'address' => '宮崎県西臼杵郡日之影町見立1-2',
            'building_name' => '',
            'opinion' => '大変有用な道具に持ったらしく、もう前提が最も発展していきます。',
            'created_at' => new Carbon('2022-01-05 16:27:38')
        ];
        Contact::create($param); // 2

        $param = [
            'fullname' => '中山 務',
            'gender' => 1,
            'email' => 'tsutomu399@dvma.ovu',
            'postcode' => '781-3121',
            'address' => '高知県高知市鏡横矢4-14',
            'building_name' => '鏡横矢シーサイド314',
            'opinion' => '複数の対象の組み合わせに参照する権利はフリーとなる中、担保定める記事を著作者の同意必要であり、例え引用俳句のみとしても、著作物の侵害とされます。',
            'created_at' => new Carbon('2022-02-12 21:59:58')
        ];
        Contact::create($param); //3

        $param = [
            'fullname' => '熊倉澄江',
            'gender' => 2,
            'email' => 'sumie_kumakura@dbkiboh.du',
            'postcode' => '739-0152',
            'address' => '広島県東広島市八本松町吉川1-2-10',
            'building_name' => '渤海アパート105',
            'opinion' => '著作物自体は、著作者が許諾することとし、関係者の事後承諾は不要とします。' . '¥n' . 'たとえば、要素の要約性も、フリーの参照でき、より慎重に権利を確認する行為は、本財団が引用したことに対して問うことはありません。',
            'created_at' => new Carbon('2022-02-28 00:32:05')
        ];
        Contact::create($param);   // 4

        $param = [
            'fullname' => '永島 景子',
            'gender' => 2,
            'email' => 'onagashima@sbvurcixf.cvs',
            'postcode' => '521-0306',
            'address' => '滋賀県米原市下板並4-10-16',
            'building_name' => '',
            'opinion' => '引用文を掲載する要件については、少なくとも著作権に反する行為です。' . '¥n' .'場合により、受信権の引用により利用上の問題が当サイトに公開され、本公表者は、本著作によりプロジェクトに投稿避ける行為と見做されます。' .'¥n' . '許諾があれば、誰の追加も問題となりません。',
            'created_at' => new Carbon('2022-03-03 06:20:54')
        ];
        Contact::create($param);  //5

        $param = [
            'fullname' => '尾崎修子',
            'gender' => 2,
            'email' => 'oozaki@guqt.fk',
            'postcode' => '259-0147',
            'address' => '神奈川県足柄上郡中井町鴨沢2-5',
            'building_name' => '',
            'opinion' => '今後、本引用物を、該当ある記事の内容、方法が可能に侵害したことが認められれば、文献要件の著作を対象に著作なることで投稿有しない著者を追加します。',
            'created_at' => new Carbon('2022-03-16 15:09:44')
        ];
        Contact::create($param); // 6

        $param = [
            'fullname' => '梅原 直道',
            'gender' => 1,
            'email' => 'tadamichi8494@uhjflghmzc.hq.php',
            'postcode' => '381-2703',
            'address' => '長野県長野市大岡乙1-12',
            'building_name' => '',
            'opinion' => '保護者の表現と執筆について、特に指示が無いと科されることがあります。たとえば時には、引用文の投稿を助けてください。記事を少なくとも引用について、複数の記事として原則、早々に達成したことを判断します。',
            'created_at' => new Carbon('2022-03-28 12:01:25')
        ];
        Contact::create($param);  // 7

        $param = [
            'fullname' => '瀬戸 市太郎',
            'gender' => 1,
            'email' => 'useto@ruvunvcc.ebp',
            'postcode' => '055-0414',
            'address' => '北海道沙流郡平取町岩知志4-1-18',
            'building_name' => '',
            'opinion' => '読者を法律をする否による、その記事のコンテンツが強く決議できるられていプロジェクトのすべてを向上定めると、ファイル権が記事が掲げる方針について、そのペディア内の独自出版の場合を著作するたりし要件ある。',
            'created_at' => new Carbon('2022-03-29 22:45:08')
        ];
        Contact::create($param);  //8

        $param = [
            'fullname' => '小山田 信太郎',
            'gender' => 9,
            'email' => 'shintarou_oyamada@zraiputtd.nb.vek',
            'postcode' => '563-0050',
            'address' => '大阪府池田市新町4-5',
            'building_name' => '',
            'opinion' => '同じようなけれ創作ライセンスは、対象で保持独自権の侵害で独自文によれペディアが、全て有しています。',
            'created_at' => new Carbon('2022-04-05 14:28:57')
        ];
        Contact::create($param);   //9

        $param = [
            'fullname' => '永野 正子',
            'gender' => 2,
            'email' => 'phkqrstxidmasako355@ekegjda.nvr',
            'postcode' => '023-0027',
            'address' => '岩手県奥州市水沢幅下2-10-15',
            'building_name' => '渤水沢幅下シーサイド406',
            'opinion' => 'これらに問題でされることで「列挙者」は禁止されます。' .'¥n' .'フレーズのメディアと引用しられば、以下を可能な対象なが行われて、デュアルに著作なるあるライセンスを文を著作でき、実際表示されます。',
            'created_at' => new Carbon('2022-04-11 09:38:04')
        ];
        Contact::create($param); // 10

        $param = [
            'fullname' => '斎藤 碧衣',
            'gender' => 9,
            'email' => 'isaitou@fckuzvs.pagxf.uw',
            'postcode' => '919-0301',
            'address' => '福井県福井市下細江町4-17',
            'building_name' => 'リバーサイド下細江町110',
            'opinion' => '利用法に検証される見解ますたば問題については問いません。ないしは、ライセンスに記事を著作物と表示してください。これにより、「趣旨で、それなど記載に適法」となり、裁判一般としについて有償の趣旨をなります。',
            'created_at' => new Carbon('2022-04-28 18:55:12')
        ];
        Contact::create($param); // 11

        $param = [
            'fullname' => '前島 亜依彩',
            'gender' => 2,
            'email' => 'aisa53273@khzplkub.ptshh.mak',
            'postcode' => '530-0003',
            'address' => '大阪府大阪市北区堂島3-8-6',
            'building_name' => '',
            'opinion' => '充足を示します違反者、たとえば記事が著作物に引用し受け入れ適法について、著作会の投稿に要件による、記事上のなく補足を基づくれ可能者はできる、文章の許諾は無いなるだある。',
            'created_at' => new Carbon('2022-05-06 05:23:48')
        ];
        Contact::create($param);   // 12

        $param = [
            'fullname' => '木村 定雄',
            'gender' => 1,
            'email' => 'satoshi33878@fxmlyeskwz.mnj',
            'postcode' => '653-0834',
            'address' => '宮崎県延岡市桜小路1-18-18',
            'building_name' => '',
            'opinion' => '引用号の方針に作らてなりCommonsは、削除物等の明確な裁判の原則と著作よれられ明確にします。独自ますことと、該当版者は、列挙名と著作ありれ記事たでばも、侵害の文章のことます、参照書き等の既存があたりこと短い表示なりことに該当考えるているない。',
            'created_at' => new Carbon('2022-05-15 10:12:34')
        ];
        Contact::create($param);   // 13

        $param = [
            'fullname' => '尾上 修三',
            'gender' => 1,
            'email' => 'shuuzou_ogami@nlrvexzhug.qz.djr',
            'postcode' => '653-0834',
            'address' => '兵庫県神戸市長田区川西通1-15-3',
            'building_name' => 'ステージ川西通217',
            'opinion' => '被最小限は、そのようです原則記事に引用ある、編集権を制定しれてい要件が、ルールの作家として著作する以下の表現権利により、記事が転載しときの題号としてさことがペディア・プロジェクトがさていた。',
            'created_at' => new Carbon('2022-05-17 19:32:54')
        ];
        Contact::create($param);   // 14
        $param = [
            'fullname' => '市原 覚',
            'gender' => 9,
            'email' => 'satoshi33878@fxmlyeskwz.mnj',
            'postcode' => '240-0014',
            'address' => '神奈川県横浜市保土ケ谷区霞台4-14-5',
            'building_name' => '',
            'opinion' => '下財団は、ソース物一つをし法律・映画にし脚注の引用会て巻という、107章2007プロジェクト1章の性質物侵害による、独自記事が抜粋しておくな。',
            'created_at' => new Carbon('2022-05-18 00:02:01')
        ];
        Contact::create($param);   //15

        $param = [
            'fullname' => '成田 保',
            'gender' => 1,
            'email' => 'tamotsu40746@vfad.tu.wgb',
            'postcode' => '329-1412',
            'address' => '栃木県さくら市喜連川4-2-14',
            'building_name' => '',
            'opinion' => '記事国著作は、日本語・濫をいい要件はpredominantlyうますことから主題をし以下を、規定の最終を満たすことをページに対して、文には無い受け入れのフリーで満たさませある。',
            'created_at' => new Carbon('2022-05-20 11:51:41')
        ];
        Contact::create($param);   //16

        $param = [
            'fullname' => '畠中 花音',
            'gender' => 2,
            'email' => 'kanonhatanaka@xlkfn.if',
            'postcode' => '790-0052',
            'address' => '愛媛県松山市竹原町4-3',
            'building_name' => '',
            'opinion' => 'その記事の節として、米国の参照者等と、被引用版(Creative一般一つ対象種類出典ルール要件)の学問物物によって文採用担保のことます、補足を可能でますことを信頼していなかっ。',
            'created_at' => new Carbon('2022-05-25 20:34:34')
        ];
        Contact::create($param);   // 17

        $param = [
            'fullname' => '中谷 一京',
            'gender' => 1, 
            'email' => 'ikkei56113@tdziy.jl',
            'postcode' => '870-0133',
            'address' => '大分県大分市葛木1-16-9',
            'building_name' => '',
            'opinion' => '方針版公表は人物対象の一定を内容でいるませこととできれでば、本質ペディアの創作とソースの創作には、引用者者上の向上はユーザによるそのであることを、本百科がはメディア者検証の方針を著作するれることにするます。',
            'created_at' => new Carbon('2022-05-30 05:06:14')
        ];
        Contact::create($param);   //18

        $param = [
            'fullname' => '井口 龍雄',
            'gender' => 1,
            'email' => 'm-eikftatsuo91219@cdgevqze.csa',
            'postcode' => '099-0122',
            'address' => '北海道紋別郡遠軽町白滝支湧別2-18-11',
            'building_name' => '渤海アパート105',
            'opinion' => '誰が、一般者疑義の記事の被著作会は日本権がなるます。' .'¥n' . '合衆国の演説権等でするて、達成版の例にできるてい判断性を、掲載権性の出版に考えこと短い許諾できる公表は、百科として引用性著作に作らん。ただし、3日1条ができなけれ著作ますないて、発表性書きの引用を問いん翻訳を明瞭ます。',
            'created_at' => new Carbon('2022-06-01 23:25:58')
        ];
        Contact::create($param);   // 19

        $param = [
            'fullname' => '大槻 蒼馬',
            'gender' => 1,
            'email' => 'soumaootsuki@edabssqk.saa',
            'postcode' => '373-0814',
            'address' => '群馬県太田市朝日町1-15-20',
            'building_name' => '',
            'opinion' => 'GNUのユースにして、活発ます提供で掲載さをもとき3そこで48の主体性が以後する独自にしれと行っれてなり他、被政治はその法律を満たすませ。',
            'created_at' => new Carbon('2022-06-09 07:35:12')
        ];
        Contact::create($param);   //20

        $param = [
            'fullname' => '金城 真美',
            'gender' => 2,
            'email' => 'Mami_Kanashiro@sjoln.ff.onn',
            'postcode' => '103-0004',
            'address' => '東京都中央区東日本橋2-10-7',
            'building_name' => '',
            'opinion' => 'ときの項でできることとして反映会を侵害生じるまし投稿を設けるなば、承諾名ライセンス日が削除含むませものはできて発揮しれな。',
            'created_at' => new Carbon('2022-06-14 14:15:57')
        ];
        Contact::create($param); // 21

        $param = [
            'fullname' => '佐竹 映奈',
            'gender' => 2,
            'email' => 'eina56497@cdkdlu.xz',
            'postcode' => '395-0067',
            'address' => '長野県飯田市羽場権現1-6-9',
            'building_name' => '羽場権現庵319',
            'opinion' => '一方、引用物の見解が認めて著作されるます要求者は、投稿第17内容の「そのまま括弧よれれてい承諾物」に侵害認めものにするた。ただし、.第32文に従って許諾物権を編集なる他は、著作国の決議号を誤認されるてなり以下による観点版に策定さことにありあっ。',
            'created_at' => new Carbon('2022-06-28 19:58:41')
        ];
        Contact::create($param);   // 22

        $param = [
            'fullname' => '小玉 久美',
            'gender' => 2,
            'email' => 'kumi360@nyxhr.xey',
            'postcode' => '590-0904',
            'address' => '大阪府堺市堺区南島町4-11-4',
            'building_name' => 'ハウス南島町116',
            'opinion' => 'どう、事項毎著作権著作参加の以下で、ためのメディアがしものに引用認めな。',
            'created_at' => new Carbon('2022-07-18 11:22:34')
        ];
        Contact::create($param);   //23

        $param = [
            'fullname' => '中岡 真悠',
            'gender' => 1,
            'email' => 'unakaoka@xnajfov.jl',
            'postcode' => '891-3118',
            'address' => '鹿児島県西之表市馬毛島2-12-12',
            'building_name' => '',
            'opinion' => 'アメリカ合衆国の侵害版権(日本取り扱い3条)のコンテンツをも、改変的なけれ文検証回避ますあっ3条として、「公式で著作」あっあれとしれページから引用をすることにおいて、考慮家の受信を引用得ます。',
            'created_at' => new Carbon('2022-08-02 04:56:02')
        ];
        Contact::create($param);   // 24

        $param = [
            'fullname' => '藤原 秀之',
            'gender' => 1,
            'email' => 'Hideyuki_Fujiwara@cjslbd.gtl',
            'postcode' => '892-0834',
            'address' => '鹿児島県鹿児島市南林寺町1-8-1',
            'building_name' => '',
            'opinion' => '2007年を作るば、その該当にフリー文を編集扱うか技術かは、たとえ上の32コンテンツに利用とどめが著作なっれない。',
            'created_at' => new Carbon('2022-08-21 22:32:42')
        ];
        Contact::create($param);   // 25

        $param = [
            'fullname' => '丹野 五月',
            'gender' => 2,
            'email' => 'satsuki4427@gudo.gi.qs',
            'postcode' => '385-0003',
            'address' => '長野県佐久市下平尾3-10-16',
            'building_name' => '',
            'opinion' => '仮に合衆国対象が転載するませますて日本権107条3項をする言語が努めれる括弧なませて、米国元をは日本国1項にできる著者法典を著作生じる、ページないんこととしてありことがするまし。',
            'created_at' => new Carbon('2022-09-02 03:45:56')
        ];
        Contact::create($param);   // 26

        $param = [
            'fullname' => '笹原 幸',
            'gender' => 2,
            'email' => 'Sachi_Sasahara@xuwkxxo.fcqec.ra',
            'postcode' => '870-0867',
            'address' => '大分県大分市東野台4-9-3',
            'building_name' => '',
            'opinion' => '本文章に対しライセンスに、ためのところ著作定めます。' . '¥n' . '「文項」とも、国内方針書きの他人あるないて、回避権の参照を掲げることへなっます。',
            'created_at' => new Carbon('2022-09-19 09:19:29')
        ];
        Contact::create($param);   // 27

        $param = [
            'fullname' => '島村 理世',
            'gender' => 2,
            'email' => 'rize_shimamura@jvuadnus.zii',
            'postcode' => '900-0005',
            'address' => '沖縄県那覇市天久3-6-11',
            'building_name' => 'プレシャス天久209',
            'opinion' => '「著作」とは、方針他等の目的と著作研究あり、ないしその創作、決議ペディアから投稿しので規律として、防止者に状態にしているだ両国の提供等で他の自らを回避さことをいるた。',
            'created_at' => new Carbon('2022-10-07 16:27:38')
        ];
        Contact::create($param);   //28

        $param = [
            'fullname' => '梅沢 安弘',
            'gender' => 1,
            'email' => 'pvcvfnyasuhiro8845@jmnmuebxo.ofk',
            'postcode' => '010-0135',
            'address' => '秋田県秋田市上新城五十丁3-12',
            'building_name' => 'コート上新城五十丁109',
            'opinion' => '「被運用記事」とは、次々に依頼できれている対象、それの主従下がしませ。「CCthe引用書籍1著作3」とは、「CC条件短歌利用記事3表現1」コンテンツにするで。',
            'created_at' => new Carbon('2022-10-14 15:23:45')
        ];
        Contact::create($param);   // 29

        $param = [
            'fullname' => '佐竹 博道',
            'gender' => 1,
            'email' => 'hiromichisatake@xaew.ema',
            'postcode' => '779-3405',
            'address' => '徳島県吉野川市山川町木綿麻山1-8-18',
            'building_name' => '',
            'opinion' => '「日本語文献」とも、countries作家著作日本語4存続107と日本語の方針要件、または誰が言語権をありユースをしで。',
            'created_at' => new Carbon('2022-10-23 09:18:27')
        ];
        Contact::create($param);   // 30

        $param = [
            'fullname' => '渡辺 透',
            'gender' => 1,
            'email' => 'wata_tohru@gogle.com',
            'postcode' => '015-0012',
            'address' => '秋田県由利本荘市石脇23-45',
            'building_name' => '渤海アパート105',
            'opinion' => 'お世話になっております。' . '¥n' . '今度の商品が詰まらない状態です。',
            'created_at' => new Carbon('2022-10-30 01:23:34')
        ];
        Contact::create($param);   // 31

        $param = [
            'fullname' => '石川 小百合',
            'gender' => 2,
            'email' => 'sayuri_stione@gogle.com',
            'postcode' => '030-1211',
            'address' => '青森県東津軽郡蓬田村蓬田',
            'building_name' => '',
            'opinion' => '先日メールにて問い合わせしましたものです。' . '¥n' . '早急に回答いただけませんでしょうか？',
            'created_at' => new Carbon('2022-11-01 23:34:56')
        ];
        Contact::create($param);   // 32


        $param = [
            'fullname' => '子石川 小百合',
            'gender' => 2,
            'email' => 'sayurichan@gogle.com',
            'postcode' => '854-0123',
            'address' => '長崎県諫早市天神町35-6',
            'building_name' => '',
            'opinion' => 'するとすぐだめだないにおいて頭ました。' . '¥n' . 'だめですましものますはまし実は声のだめ者のときをはしきりにばかだだて、やつじゃ音楽をこらえれわけでしだ。',
            'created_at' => new Carbon('2022-11-02 23:34:56')
        ];
        Contact::create($param);   // 33


        $param = [
            'fullname' => '石川 寮',
            'gender' => 2,
            'email' => 'ryou@infoseek.jp',
            'postcode' => '412-0012',
            'address' => '静岡県御殿場市増田',
            'building_name' => '',
            'opinion' => 'ある過ぎそこはドレミファにうかったてはじめの水のかっこう汁をい第十おいで汁のごつごつをいるて行っございた。ゴーシュは夕方つまんて来まし。',
            'created_at' => new Carbon('2022-11-03 23:34:56')
        ];
        Contact::create($param);   // 34


        $param = [
            'fullname' => '石川 小百合',
            'gender' => 2,
            'email' => 'sayuri_stione@gogle.com',
            'postcode' => '030-1211',
            'address' => '青森県東津軽郡蓬田村蓬田',
            'building_name' => '',
            'opinion' => '先日メールにて問い合わせしましたものです。' . '¥n' . '何度も問い合わせしておりますが、早急に回答いただけませんでしょうか？',
            'created_at' => new Carbon('2022-11-05 23:34:56')
        ];
        Contact::create($param);   // 35
    }
}
