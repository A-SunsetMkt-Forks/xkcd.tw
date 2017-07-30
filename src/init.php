<?php
include __DIR__ . '/../vendor/autoload.php';

$twig = new \Twig_Environment(new \Twig_Loader_Filesystem(__DIR__ . '/../view'));

$og = [
];

// 紀錄：
// 1827 之後還沒看
// 1770 ~ 1761 之間還沒看
$strips = [
    1858 => [
        'title' => '七月四日',
        'caption' => '奇怪的是，他們還是會吃熱狗慶祝。由於他們沒有嘴，所以就只是把熱狗往天上丟然後掉到葉片裡面，弄的髒髒的。',
        'style' => "max-height:308px",
    ],
    1827 => [
        'title' => '生存者偏差',
        'caption' => '他們會說結果就能代表一切，但這是哪門子的失敗主義論點？如果同意這說法，那什麼鬼東西都能同意了。',
        'style' => "max-height:470px",
    ],
    1825 => [
        'title' => '7-Eleven',
        'caption' => '只有在夏威夷或亞利桑納之類的地方才有真正的24小時商店，但他們也還是會在某些年出錯。',
        'style' => "max-height:356px",
    ],
    1824 => [
        'title' => '辨識圖',
        'caption' => '小心，繁殖季節到了，這之中有些會 *非常* 強勢的守護自己的巢穴。',
        'style' => "max-height:374px",
    ],
    1823 => [
        'title' => '最熱門的編輯器',
        'caption' => 'Elon Musk 終於把我從特斯拉的內部 repo 裡面踢掉了，因為我一直在送 PR 讓方向控制能支援 VIM 快速鍵。',
        'style' => "max-height:264px",
    ],
    1818 => [
        'title' => '雷利散射',
        'caption' => '如果你問「為什麼葉子是綠色的」，通常答案會是「因為葉子裡面有葉綠素，葉綠素是綠色的」，然而「為什麼葉綠素會散射出綠光」本身也是個好問題。',
        'style' => "max-height:553px",
    ],
    1815 => [
        'title' => '國旗',
        'caption' => '有個妥協法案被提出來，可以留下通知條，但至少要充電。',
        'style' => "max-height:385px",
    ],
    1813 => [
        'title' => '嘔吐表情符號',
        'caption' => '我最喜歡的應該會是 U+1F609 U+1F93F 微笑嘔吐臉。',
        'style' => "max-height:323px",
    ],
    1810 => [
        'title' => '聊天系統',
        'caption' => '我是 Instagram 使用者裡面，少數只透過 UNIX talk 連結的。',
        'style' => "max-height:537px",
    ],
    1808 => [
        'title' => 'Hacking',
        'caption' => '裡面還包括了幾百萬個質數，電子雞的 0-day 漏洞，以及讓 gcc 以及 bash 執行任意程式碼的方法。',
        'style' => "max-height:400px",
    ],
    1807 => [
        'title' => '竊聽',
        'caption' => '你當然可以直接問，不過這樣可以順便把禮物給解決掉。',
        'style' => "max-height:400px",
    ],
    1806 => [
        'title' => '跟你借筆電',
        'caption' => '如果軟體跟得上的話，把滑鼠滾輪設定成「復原」跟「重做」應該很有趣。',
        'style' => "max-height:493px",
    ],
    1804 => [
        'title' => '影片內容',
        'caption' => '「所以，像是，性感新聞影片這樣？」「不，那已經有人試過了，那還是影片內容。我們得透過打砲來傳遞新聞內容。我會把這個稱作『嘴上內容』，但我記得這好像是 Neil Cicierega 的專輯名稱。」',
        'style' => "max-height:358px",
    ],
    1803 => [
        'title' => '地點評論',
        'caption' => 'Google 跟 Yelp 一直在刪除我對於馬里亞納海溝、車諾比爾反應爐心、噴射氣流、以及赤道的批判性評論。',
        'style' => "max-height:1015px",
    ],
    1801 => [
        'title' => '選擇困難症',
        'caption' => '說得好，不做決定本身是也個決定，所以這是我該研究的第三個選項。',
        'style' => "max-height:385px",
    ],
    1795 => [
        'title' => '吃到飽',
        'caption' => '在我的無心導致了嚴重的由廣告看板造成的胃痛之後，我理解到應該最後才處理做廣靠看板的店面。',
        'style' => "max-height:219px",
    ],
    1792 => [
        'title' => '鳥/飛機/超人',
        'caption' => '你可以在窗戶上貼上特製的半透明膜，避免鳥或超人意外飛進窗戶',
        'style' => "max-height:561px",
    ],
    1791 => [
        'title' => '折射望遠鏡 vs 反射望遠鏡',
        'caption' => '反過來說，折射式望遠鏡的聚光能力較弱，所以不容易分辨出影子人或是邪神 Chernabog',
        'style' => "max-height:306px",
    ],
    1790 => [
        'title' => '五月病',
        'caption' => '轉個九十度，所有的 effect 都是 side effect',
        'style' => "max-height:297px",
        'comment' => '原文標題的「SAD」在 explainxkcd.com 有一些爭論。',
    ],
    1789 => [
        'title' => '電話號碼',
        'caption' => '簡訊應該是傳得到，不過太長的簡訊會被轉成語音信箱，我好像把語音信箱擋掉了。',
        'style' => "max-height:471px",
    ],
    1788 => [
        'title' => '駁船',
        'caption' => '我的人生目標是將一艘駁船發射到空中，然後降落在 Elon Musk 的火箭上。',
        'style' => "max-height:404px",
    ],
    1787 => [
        'title' => '語音指令',
        'caption' => 'Davork 句子乍看之下比較難發音，但研究指出這對聲帶壓力比較小。',
        'style' => "max-height:378px",
    ],
    1786 => [
        'title' => '垃圾',
        'caption' => '而且裡面時間流逝的速度不太一樣，裡面大部分的垃圾已經分解掉幾百年了。我有想過看要不要去聯絡尤卡山，也許他們有興趣談合作。',
        'style' => "max-height:274px",
    ],
    1785 => [
        'title' => 'Wifi',
        'caption' => '更右邊那塊的人能夠正常連上，不過能連上的理由跟「韌體」什麼的鬼東西有關',
        'style' => "max-height:317px",
    ],
    1783 => [
        'title' => 'EMail',
        'caption' => 'Rob，不好意思現在才回信，你還有要去看瓦力首映場嗎？',
        'style' => "max-height:359px",
    ],
    1782 => [
        'title' => '團隊通訊',
        'caption' => '2078:他終於宣布他從 screen + irssi 跳槽到 tmux + weechat',
        'style' => "max-height:299px",
    ],
    1781 => [
        'title' => '古代神器',
        'caption' => '我沒想到你能只用離群值就做出整組資料',
        'style' => "max-height:351px",
    ],
    1780 => [
        'title' => '家電維修',
        'caption' => '[拿著三相馬達]很明顯的，問題在於我原本拆下這顆馬達的加濕器已經壞了。',
        'style' => "max-height:270px",
    ],
    1776 => [
        'title' => '麋鹿',
        'caption' => 'And then in a twinkling, a sound gave me pause / From the roof came the scratching of eight tarsal claws.',
        'style' => "max-height:249px",
    ],
    1775 => [
        'title' => '學到的事情',
        'caption' => '猜猜看是誰兩隻大拇指受傷，在急診室待了一整夜，只因為試著去救一隻跑進停紅燈的車子底下，後來還爬到引擎室裡面的小貓？而且還要感謝抗生素讓他能保住兩隻大拇指？就是這傢伙（註：小貓沒事！）',
        'style' => "max-height:543px",
    ],
    1773 => [
        'title' => '負能量',
        'caption' => '[Google搜尋]如何封鎖自家草坪',
        'style' => "max-height:227px",
    ],
    1770 => [
        'title' => '改介面',
        'caption' => '我知道他們總是說這是永久性的更動，不過當他們聽到我們抱怨的多大聲之後，總是會有人找到方法把東西改回來。',
        'style' => "max-height:403px",
    ],
    1769 => [
        'title' => '沒看過星際大戰',
        'caption' => '如果有人在問你那些奇怪的細節，你就說那是從絕地王子系列來的。裡面太多彼此衝突的亂七八糟東西，幾十年前大部分的 Expanded Universe/Legends 粉絲就集體選擇遺忘裡面的細節。',
        'style' => "max-height:489px",
    ],
    1761 => [
        'title' => '牽拖',
        'caption' => '我敢說如果我對著我朋友大吼大叫把他們嚇得半死，我心情會變好',
        'style' => "max-height:215px",
    ],
    1758 => [
        'title' => '天文物理',
        'caption' => '神經科學部門 / 格言：我發誓如果我聽到「鏡像神經元」這個詞的話我會翻桌',
        'style' => "max-height:314px",
    ],
    1755 => [
        'title' => '舊時光',
        'caption' => 'Lot of drama in those days, including constant efforts to force the &quot;Reflections on Trusting Trust&quot; guy into retirement so we could stop being so paranoid about compilers.',
        'style' => "max-height:530px",
    ],
    1741 => [
        'title' => '工作量',
        'caption' => '雖然是我自己想像的，但我對帶開關的電源線起火事件已經有*這麼*多意見了...',
        'style' => "max-height:447px",
    ],
    1737 => [
        'title' => '資料中心規模',
        'caption' => '艾西莫夫（最後的問題）漫畫裡的AC是藉由把每個資料中心透過超空間相連而建立起來的，這能解釋一些事情。熵沒有被逆轉，他只是在宇宙終結時扔掉它然後重新買一個新的進來。',
        'style' => "max-height:294px",
    ],
    1731 => [
        'title' => '錯了',
        'caption' => '啊，我剛想起有另外一件事情我是對的，像是這個...',
        'style' => "max-height:638px",
    ],
    1730 => [
        'title' => '掩星板',
        'caption' => 'New Worlds 任務有在爭取掩星板的預算，不過因為 NASA 有贊助，所以很難用這招嚇到他們的望遠鏡操作人員。',
        'style' => "max-height:287px",
    ],
    1728 => [
        'title' => 'Cron Mail',
        'caption' => '接招吧，我在系統上意外維護了十五年卻從來沒搞懂怎麼用的 1980 年代架構的鬼東西',
        'style' => "max-height:298px",
    ],
    1727 => [
        'title' => '電腦數量',
        'caption' => '他們為了灌水，在年度報告中把伽利略上的備援系統算成好幾台電腦。但就算這樣他們的進度還是嚴重落後。',
        'style' => "max-height:311px",
    ],
    1726 => [
        'title' => 'Unicode',
        'caption' => '我對於申請雷龍的表情符號 codepoint 的提案感到非常期待，這東西有潛力把好幾群脫離現實的書呆子扯進同一個巨大網路辯論中。',
        'style' => "max-height:461px",
    ],
    1725 => [
        'title' => '線性回歸',
        'caption' => '95%的信心區間暗示龍索的狗也可能是貓，或者是茶壺。',
        'style' => "max-height:312px",
    ],
    1723 => [
        'title' => '隕石判斷',
        'caption' => "點圖可以看到真正的隕石判斷流程圖。我覺得最有趣的部分是「有人看到他掉下來嗎？ 有 -> 那不是隕石」，他沒寫錯。",
        'style' => "max-height:213px",
        'link' => 'http://meteorites.wustl.edu/check-list.htm',
    ],
    1722 => [
        'title' => 'Debugging',
        'caption' => "如果你 google 不到你眼前的錯誤訊息，那你很可能發現了馬丁之劍的線索。",
        'style' => "max-height:258px",
    ],
    1720 => [
        'title' => '馬兒們',
        'caption' => "這台車的決策能力是馬匹的 240%，而產生的便便只有 30%。",
        'style' => "max-height:272px",
    ],
    1716 => [
        'title' => '時間旅行理論',
        'caption' => "「對了，那個看起來很帥的眼鏡是什麼」「只是壞掉的 Google Glass」",
        'style' => "max-height:298px",
    ],
    1715 => [
        'title' => '家事小技巧',
        'caption' => "如果想讓你的鞋子更舒適、不發臭、而且更耐久，可以試著在洗澡前把他們脫下來。",
        'style' => "max-height:247px",
    ],
    1693 => [
        'title' => '氧化',
        'caption' => '冷靜一點，你的皮膚上本來就住著一大堆節肢動物，那幾隻只是大一點而已。',
        'style' => "max-height:297px",
    ],

    1667 => [
        'title' => '演算法',
        'caption' => '在 2007 年發生過宗教分裂，當時有個擁護 OpenOffice 的教派複製了一份 Sunday.xlsx 並獨立維護了這個檔案幾個月，為了讓兩份衝突的行程能夠重新結合在一起，導致了新發明的誕生，在試算表的格子之中，出現了現代的版本控制系統。',
        'style' => "max-height:206px",
    ],
    1660 => [
        'title' => '機長廣播',
        'caption' => '啊靠，你有付錢嗎？嘿，有人有付錢嗎？有的話能讓我借一下你的電話嗎？',
        'style' => "max-height:315px",
    ],
    1659 => [
        'title' => '輪胎鞦韆',
        'caption' => '如果我們能找到其中一個輪胎掩埋場，那下次他來搶他的卡車的時候我們就能抽身讓他把車拿回去。',
        'style' => "max-height:530px",
    ],
    1658 => [
        'title' => '估計時間',
        'caption' => '侯世達定律：你每花一分鐘思考侯世達定律，你就有一分鐘沒在工作，而且你永遠做不完！完～～蛋～～啦～～～！',
        'style' => "max-height:278px",
    ],
    1657 => [
        'title' => '瘋狂',
        'caption' => '我在十本字典裡面找 "insanity"，沒有一本寫了類似的東西。DSM-4 裡面也沒提到。不過我會繼續找下去，搞不好 DSM-5 裡面會有！',
        'style' => "max-height:378px",
    ],
    1656 => [
        'title' => '開始了',
        'caption' => '也可以試試看「矮額～」',
        'style' => "max-height:196px",
    ],
    1654 => [
        'title' => '萬用安裝 script',
        'caption' => '失敗的時候通常不會有什麼問題，如果安裝了好幾個版本，那其中一個版本是正確版本的機會也會提高。（注意：建議加上「yes」指令跟「 2>/dev/null」）',
        'style' => "max-height:340px",
        'comment' => '這篇好像沒什麼翻譯到...',
    ],
    1652 => [
        'title' => '條件判斷',
        'caption' => '「如果你執著夠了，我們來去吃晚餐」「你又來了」「我沒有！」',
        'style' => "max-height:380px",
    ],
    1643 => [
        'title' => '溫度',
        'caption' => '「攝氏弳度還是華氏弳度？」「呃，不好意思，我先走了」',
        'style' => "max-height:284px",
    ],
    1642 => [
        'title' => '重力波',
        'caption' => '最後一筆 Linkedin 連結請求創下了天文史上發射能量最強的紀錄，也許該回他一句「鼻要」',
        'style' => "max-height:284px",
    ],
    1638 => [
        'title' => '反斜線們',
        'caption' => "我爬了一下我 .bash_history，看哪些指令有最多的特殊字元跟最少的英文字母，贏家是「cat out.txt | grep -o '[[(].*[])][^)]]*$'」...我不記得這是什麼也沒印象我原本想幹嘛，希望這行指令會動。",
        'style' => "max-height:207px",
    ],
    1636 => [
        'title' => 'XKCD 架構',
        'caption' => "此網站需要 Sun Java 6.0.0.1 (32-bit) 或更高版本，您安裝了 Macromedia Java 7.3.8.1¾ (48-bit)。點此（連結到 java.com 首頁）可以下載安裝程式，雖然他會正常執行不過什麼都不會安裝。",
        'style' => "max-height:592px",
    ],
    1633 => [
        'title' => '可能還沒發現的行星',
        'caption' => "超人在鳥跟飛機的邊界上，難怪有人會搞錯。",
        'style' => "max-height:697px",
    ],
    1613 => [
        'title' => '機器人三定律',
        'caption' => '以第五個順序來說，自動駕駛車會很樂意載你到處走，但如果你要他們開到二手車行，他們會把門鎖起來，然後有禮貌的問你餓死人類要花多久時間。',
        'style' => "max-height:570px",
    ],
    1606 => [
        'title' => '五日天氣預報',
        'caption' => '有句話是這樣說的：如果你不喜歡太陽系這裡的天氣，等個五十億年就好了。',
        'style' => 'max-height: 440px',
    ],
    1604 => [
        'title' => '蛇',
        'caption' => '最後一條色環用來標示這條蛇被人抓起來之後能容忍到什麼程度而不咬人',
        'style' => 'max-height:205px;',
    ],
    1601 => [
        'title' => '人際孤立',
        'caption' => '2060: 那些開心著彼此聊著自己怎麼離開電腦的超智慧AI已經變成了老古董。現在的量子超生物忙著做多重宇宙模擬，根本沒空發現他們自己是在電腦裡面！',
        'style' => 'max-height:243px;',
    ],
    1597 => [
        'title' => 'GIT',
        'caption' => "如果沒用的話，打開 git.txt ，裡面那支電話可以找到我一個朋友他會用 GIT。他會先跟你講幾分鐘的「這很簡單，你就把 branch 想成是....」，之後他就會告訴你一段指令，那段指令能把東西修好。",
        'style' => "max-height:478px",
    ],
    1570 => [
        'title' => '工程師的三段論證',
        'caption' => "不常見，但更糟糕的後果：「3:[所有在該金融系統裡面的人] 等等，我的錢 跑去哪了？」",
        'style' => "max-height:263px",
    ],
    1521 => [
        'title' => '石中劍',
        'caption' => "我只是覺得這劍很酷而已，哪有那麼麻煩的..",
        'style' => "max-height:184px",
    ],
    1519 => [
        'title' => '金星',
        'caption' => "金星花卉突然進入地球，導致授粉動物的爆炸性成長。這稱為「蝴蝶效應」。",
        'style' => "max-height:271px",
    ],
    1510 => [
        'title' => '拿破崙',
        'caption' => "「總統先生，如果發生了萬一該怎麼辦？萬一火箭發射失敗，拿破崙沒有被困在月球上？」「叫 William Safire 寫一篇演講稿」",
        'style' => "max-height:923px",
    ],
    1505 => [
        'title' => '本體論證明',
        'caption' => "握有吃滑板世界紀錄的神，比起沒有該項紀錄的神更加的偉大。",
        'style' => "max-height:293px",
    ],
    1504 => [
        'title' => '機遇號',
        'caption' => "我們都記得登上火星的太空人說過的名言：這是我的一小...靠腰那看起來像是個鑽頭，快點回...[無法分辨]...[信號中斷]",
        'style' => "max-height:278px",
    ],
    1445 => [
        'title' => '效率',
        'caption' => "我的研究計畫延期，是因為我花了一個月研究 Dvorak 鍵盤會不會讓我打字比較快。",
        'style' => "max-height:214px",
    ],
    1425 => [
        'title' => '工作項目',
        'caption' => "在 60 年代，Marvin Minsky 找來一批應屆畢業生叫他們花一個夏天來寫程式用攝影機判斷拍到的物體是什麼。他當時認為夏天結束之前他們就能解決問題。半個世紀之後我們還在繼續努力。",
        'style' => "max-height:448px",
    ],
    1373 => [
        'title' => '螢幕截圖',
        'caption' => '我都插上充電線了但畫面看來沒在充電啊！',
        'style' => "max-height:511px",
    ],
    1361 => [
        'title' => 'Google 的公告',
        'caption' => '比較不熱門的 8.8.4.4 也已經預定要終止',
        'style' => "max-height:383px",
    ],
    1357 => [
        'title' => '言論自由',
        'caption' => '忘記是在哪裡聽到，但有人說過用言論自由來為立場辯護等於是最極端的讓步；這等於是說你說的話最吸引人的部分，在於說出來並不犯法。',
        'style' => "max-height:577px",
    ],
    1342 => [
        'title' => '古代的星星',
        'caption' => '「那幾百萬顆星星發出的光芒可能已經有幾萬年了」是少數一般人會高估天文學數字的例子。',
        'style' => "max-height:243px",
    ],
    1340 => [
        'title' => '獨特日期',
        'caption' => '如果我們的文明再持續個八千年，我想可以預期長遠當代基金會能搞定一切，然後我們會乖乖聽他們的話改用五碼年份。',
        'style' => "max-height:333px",
    ],
    1338 => [
        'title' => '陸地哺乳動物',
        'caption' => '細菌的重量還是超過我們一千倍，這還沒算進人體內幾磅重的細菌。',
        'style' => "max-height:495px",
    ],
    1329 => [
        'title' => '站立',
        'caption' => '我本來是要笑他們，結果被笑的是我。鹿其實還滿人體工學的，除了會踢人以外。',
        'style' => "max-height:246px",
    ],
    1319 => [
        'title' => '自動化',
        'caption' => 'Automating 的字根 Auto- 意思是「自己」， mating 則是「搞」的意思',
        'style' => "max-height:408px",
    ],
    1305 => [
        'title' => '隱藏功能',
        'caption' => '而且他也不會跳出對話方塊一直吵著要你的真實姓名。事實上你根本沒辦法設定你的名字，你得一直告訴別人你是誰。',
        'style' => "max-height:3238px",
        'og' => ['image' => 'http://xkcd.tw/img/og_1305.jpg']
    ],
    1301 => [
        'title' => '副檔名',
        'caption' => '手動對齊過的 txt 檔案裡面的資料從來沒騙過我。',
        'style' => "max-height:332px",
    ],
    1268 => [
        'title' => '平行宇宙',
        'caption' => '我想我應該是在1990年代後期從 Earth Prime 被傳送過來的。你們的宇宙跟我的都一樣，除了那個龍蝦什麼的以外，還有你們某些地方的人有時候會為了某些理由改掉時鐘的時間。',
        'style' => "max-height:413px",
    ],

//    1253 => [
//    ],
    1244 => [
        'title' => '一句話',
        'caption' => '嚴格說起來，我們用的是 Orbiter',
        'style' => "max-height:397px",
    ],
    1237 => [
        'title' => 'QR Code',
        'caption' => '注意，安裝程式會檢查相機的校驗碼，你必須用這支手機的相機掃描 QR Code。',
        'style' => "max-height:448px",
    ],
    1236 => [
        'title' => '貝殼',
        'caption' => '這大約等於「我到海邊撿起貝殼的次數 / 我撿起貝殼的次數」，以我來說這個數字很接近 1 。如果只考慮我沒把貝殼放到耳朵旁邊的次數的話就更接近了。',
        'style' => "max-height:394px",
    ],
    1235 => [
        'title' => '問題解決',
        'caption' => '好吧，我們只搞定那些會發出可見光、或是會移動東西、或是會發出聲音的鬼。不過這樣就包含魔鬼剋星裡面全部的鬼了，我想這樣應該夠了。',
        'style' => "max-height:214px",
    ],
    1233 => [
        'title' => '相對性',
        'caption' => '一般認為勞倫茲變換會讓物體在移動方向變得扁平，然而這並沒有考慮到光本身的移動時間。事實上，快速移動的屁屁看起來會像在旋轉接近觀察者，但不會大幅度的變形。夏奇拉是對的。',
        'style' => "max-height:350px",
        'comment' => 'Gedankedank 我實在不知道怎麼翻譯...',
    ],
    1232 => [
        'title' => '實際條件',
        'caption' => '我猜要十五年，要解決的問題真的滿多的',
        'style' => "max-height:371px",
    ],
    1229 => [
        'title' => '螢幕保護程式',
        'caption' => '這是我第二十四年每晚花八小時用獵鴨的光束槍去打那些會飛的烤麵包機，總有一天我會打下一台。',
        'style' => "max-height:1319px",
    ],
    1228 => [
        'title' => '普羅米修斯',
        'caption' => '如果有部麥克貝電影是全世界軍隊由於種種原因集結在一起對抗人類的傳說故事，而你是個戰機駕駛，正好突破防線要對奧林帕斯山發射飛彈，這時「我來還普羅米修斯偷走的東西」感覺會是句好台詞。',
        'style' => "max-height:380px",
    ],
    1224 => [
        'title' => '三百人議會',
        'caption' => '「然後催眠某個人，讓他以為自己上傳了影片。」「可是上傳者不會覺得數字卡在 301+ 一陣子很奇怪嗎？為什麼我們不直接假造播放次...」（哐噹）「299人議會休會」',
        'style' => "max-height:261px",
    ],
    1223 => [
        'title' => '矮人要塞',
        'caption' => '我也許是那種會浪費一年時間在矮人要塞裡面做出圖靈完備的電腦的人，但這代表你會花十倍的時間讓那台電腦在 Minecraft 裡面跑起來。',
        'style' => "max-height:480px",
    ],
    1218 => [
        'title' => '都靈之門',
        'caption' => '如果我們把門都打開，然後堵住西瓦南河的水壩讓水位稍微上升，池水應該會淹入摩瑞亞。你覺得水中監視者跟濕搭搭的炎魔打起來會變成怎樣？',
        'style' => "max-height:239px",
    ],
    1217 => [
        'title' => '細胞',
        'caption' => '如果他說在培養皿裡面會選擇性地殺死癌細胞，這對所有培養皿癌的患者來說會是重大的突破。',
        'style' => "max-height:339px",
    ],
    1203 => [
        'title' => '時光機',
        'caption' => '系統正常，倒數十秒...十一秒...',
        'style' => "max-height:274px",
    ],
    1200 => [
        'title' => '授權',
        'caption' => '你先別說話，不，我才不會登入帳號以後離開我的筆電趴趴走。而且我有設定在幾分鐘沒有動作之後自動切換到我哥的帳號。',
        'style' => "max-height:342px",
    ],
    1199 => [
        'title' => '沈默',
        'caption' => '所有的音樂都是 4\'33"，只是剛好旁邊有其他樂團在演奏。',
        'style' => "max-height:235px",
    ],
    1197 => [
        'title' => '所有的ADOBE更新',
        'caption' => '警告：一部分的相依軟體更新需要 21.1.2 版的 Oracle/Sun Java(TM) JDK(TM) 更新程式執行環境資料更新程式，這在您的系統上無法取得。',
        'style' => "max-height:408px",
    ],
    1179 => [
        'title' => 'ISO 8601',
        'caption' => 'ISO 8601 是在 06/05/88 出版，最近一次修訂是 12/01/04',
        'style' => "max-height:456px",
    ],
    1174 => [
        'title' => 'APP',
        'caption' => '我按下 No 的時候大概表示我已經放棄了。所以別再把我轉址到剛剛我原本想打開的那頁了，帶我回首頁吧。',
        'style' => "max-height:411px",
    ],
    1168 => [
        'title' => 'TAR',
        'caption' => '不知道哪一點比較糟：用了十五年我依然沒辦法直接記住 tar 的 flag 要怎麼下，或是在十五年的科技進步之後我還是得搞這些當年就已經十五歲的 tar flag',
        'style' => "max-height:229px",
    ],
    1162 => [
        'title' => '對數刻度',
        'caption' => '高德納紙堆表示法：在紙上寫下該數字，把紙張堆起來。如果堆得太高房間塞不下，寫下寫這個數字需要的頁數。現在這個數字還是塞不進房間裡面的話，重複一次。當紙堆可以塞進房間的時候，在卡片上寫下剛剛的動作重複做了幾次，然後把卡片釘在紙堆上。',
        'style' => "max-height:400px",
    ],
    1144 => [
        'title' => '標籤',
        'caption' => '<A>:像是</a>這樣。&nbsp;',
        'style' => "max-height:57px",
    ],
    1109 => [
        'title' => '冰箱',
        'caption' => '這應該刻在我的墓碑上，就像西蒙·斯蒂文的墓誌銘那樣。',
        'style' => "max-height:405px",
    ],
    1098 => [
        'title' => '五星評分',
        'caption' => '我不小心迷路走進全世界最嚇人的葬禮，墓碑上面只有名字跟五星評分。我嚇死了。我回到家以後想要在 Yelp 上面寫一篇壞的評論文，但當我的游標移到「一顆星」的按鈕上面時，我感到一陣惡寒...',
        'style' => "max-height:310px",
    ],
    1053 => [
        'title' => '一萬',
        'caption' => '比起說「哪個白癡不知道黃石公園的超級火山」，告訴人家有黃石公園超級火山這件事要有趣多了。',
        'style' => "max-height:316px",
    ],
    1022 => [
        'title' => '看來事已至此',
        'caption' => '「至什麼此？」「你，我，在這一刻」',
        'style' => "max-height:420px",
    ],
    979 => [
        'title' => '前人的智慧',
        'caption' => '很長的求救文應該要讓討論串的第一篇可以被任何人編輯，開頭是「來自未來的各位，我們現在的進度是...',
        'style' => 'max-height:274px;',
    ],
    978 => [
        'title' => '創造引用來源',
        'caption' => '我讀過一本受人敬重的作者寫的科普書，其中有一章，裡面大部分的假說是根基於不準確的資料，來源是...維基百科。為了讓大家提高警覺心，我不會說是哪本書或哪個作者。',
        'style' => 'max-height:614px;',
    ],
    965 => [
        'title' => '元素之力',
        'caption' => '在各國之中，操縱 Uuo 的大概是最不嚇人的。操縱氙的只好人家一點，不過至少他們的霓虹燈閃閃爍爍很有宣傳效果。',
        'style' => 'max-height:452px;',
    ],
    961 => [
        'title' => '永恆之火',
        'caption' => '懷抱希望，只要等得夠久，說不定海灘球就會消失，卡住的畫面會回來。',
        'img_url' => '/strip/961.gif',
        'style' => 'max-height:223px;',
    ],
    936 => [
        'title' => '密碼安全性',
        'caption' => '對於那些理解資訊安全以及資訊理論，而且正在跟不懂的人戰的人，我誠摯的道歉。',
        'style' => 'max-height:601px;',
    ],
    932 => [
        'title' => 'CIA',
        'caption' => '那是他們的主要徵才海報，掛在牆上接近三公尺高的地方！換句話說駭客有「梯子」這種技術！未來我們是否每個人都要為了壓克力做的海報護套付出50美金的代價呢？廣告之後我們繼續...',
        'style' => 'max-height:263px;',
    ],
    927 => [
        'title' => '標準規範',
        'caption' => '還好，充電的標準已經統一成大家全部用 mini-USB。等等是 micro-USB？ 靠腰..',
        'style' => 'max-height:283px;',
    ],
    862 => [
        'title' => '放手',
        'caption' => "經過許多年，試了各種方法，我藉由讓我的缺乏耐心跟我的懶惰彼此競爭消滅了這個習慣。我將這個行為與精神上的愉悅斷開連結的方式是設定我自己在載入任何新頁面或是聊天軟體前必須要等待三十秒，這段時間我什麼事都不能做，而且我一次只能開一個。然後我想要檢查這些網站的慾望神奇的消失了，而我「有產出」的電腦使用則不受影響。",
        'style' => 'max-height:237px;',
    ],
    837 => [
        'title' => '優惠代碼',
        'caption' => "這組代碼也保證不會讓你收到山貓。",
        'style' => 'max-height:237px;',
    ],
    833 => [
        'title' => '有說服力',
        'caption' => "而且如果你有把座標軸標清楚，我還能告訴你實際上是有多好。",
        'style' => 'max-height:237px;',
    ],
    787 => [
        'title' => '軌道載具',
        'caption' => '正常來說，從卡納維爾角發射的太空梭不太能安全的抵達能到達這幾個點的軌道。不過這篇是平行世界，要嘛是太空梭從范登堡空軍基地發射，要嘛是大家很討厭外灘群島。',
        'style' => 'max-height:345px;',
    ],
    773 => [
        'title' => '大學網站',
        'caption' => '人們會去這些網站是因為他們等不及想看下一期的校友雜誌對吧？什麼？你說要校園地圖？我們有個 CS 學生在 2001 做了個專案，你可以點選然後縮放上面的所有東西喔！',
        'style' => "max-height:378px",
    ],
    763 => [
        'title' => 'Workaround',
        'caption' => '我曾經處理過某個朋友爸爸的電腦，他的硬碟被分成六個 partition，從 C: 到 J:，每個槽都有一個「Documents」資料夾，檔案好像是隨機存到六個槽裡面的其中一個。我知道這時候什麼都不要問。',
        'style' => "max-height:462px",
    ],
    724 => [
        'title' => '地獄',
        'caption' => '另外還有個塊魂裡面東西都只比你大一點，還有個瑪力歐的無敵星星在你剛好吃不到的地方。',
        'style' => "max-height:476px",
    ],
    697 => [
        'title' => '拉伸強度 vs 剪切強度',
        'caption' => '雖然實際上，傷害是在派對主辦人在電梯的纜線上打洞來掛旗子的時候造成的。',
        'style' => "max-height:604px",
    ],
    695 => [
        'title' => '精神號',
        'caption' => '2010年1月26日，任務的第 2274 個火星日，NASA 宣布精神號無法移動轉為固定式研究站，預計數個月後就會因為太陽能板被塵埃覆蓋，電力不足而必須關閉。',
        'style' => "max-height:862px",
    ],
    683 => [
        'title' => '科學畫面',
        'caption' => '那隻老鼠看來很不安，他一定是感應到了奈米機器人！灰色警戒，我們面臨了 Helvetica 事件！',
        'style' => "max-height:865px",
    ],
    670 => [
        'title' => 'Spinal Tap 的放大器',
        'caption' => '哇喔，每...呃...還不用 200，真划算！',
        'style' => "max-height:237px",
    ],
    664 => [
        'title' => '學術界 vs 商業界',
        'caption' => '有工程師已經解決了 P=NP 問題，答案被鎖在某個打蛋器校正程式裡面。我們每發現一個 0x5f375a86，背後有數千個沒有被發現的。',
        'style' => "max-height:382px",
    ],
    630 => [
        'title' => '時間旅行',
        'caption' => '他每一封信的開頭都會寫「親愛的未來的 <你的名字>」',
        'style' => "max-height:298px",
    ],
    627 => [
        'title' => '技術支援流程圖',
        'caption' => '乖女兒，我是你爸，要怎麼列印流程圖啊？',
        'style' => "max-height:823px",
    ],
    619 => [
        'title' => '功能支援',
        'caption' => '我知道有些人已經有平滑 flash 影片支援，不過我跟我的 Intel 顯示卡還在等開發流程中的某個 kernel patch，不然我們只能看到格子狀的喬恩·史都華',
        'style' => "max-height:326px",
    ],
    612 => [
        'title' => '時間估計',
        'caption' => '他們可以直接說「連線似乎已中斷」，但是直接把時間做平均會比較有趣，讓你滿懷希望的覺得你只要多等個 1163 小時他就會跑完。',
        'style' => "max-height:335px",
    ],
    600 => [
        'title' => '機器男友',
        'caption' => '這正好是我家裡面讓人最不舒服的壁爐裝飾。',
        'style' => "max-height:220px",
    ],
    503 => [
        'title' => '用詞',
        'caption' => '然後，是只有我這麼覺得，還是日本跟紐西蘭看起來超像的？有人看過他們兩個同時出現嗎？',
        'style' => "max-height:348px",
    ],
    487 => [
        'title' => '數字體位',
        'caption' => '我們還沒做到連分數呢',
        'style' => "max-height:511px",
    ],
    457 => [
        'title' => '挫折',
        'caption' => '「別擔心，我花不到一分鐘就能解決」「是的，我注意到了」',
        'img_url' => '/strip/457.png',
        'style' => "max-height:279px",
    ],
    456 => [
        'title' => '警告',
        'caption' => '這是個真實故事，當事人不知道我把這個畫成漫畫是因為他的 Wifi 壞了好幾個禮拜',
        'style' => "max-height:277px",
    ],
    444 => [
        'title' => '懶惰馬蓋先',
        'caption' => '馬蓋先維基上有篇文章，標題是「List of problems solved by MacGyver」',
        'style' => "max-height:248px",
    ],
    393 => [
        'title' => '終極遊戲',
        'caption' => '安息吧，Gary',
        'style' => "max-height:188px",
    ],
    387 => [
        'title' => '先進技術',
        'caption' => '我們是性感的馮紐曼機器',
        'style' => "max-height:244px",
    ],
    378 => [
        'title' => '真正的程式設計師',
        'caption' => '真正的程式設計師會設定好宇宙常數，讓宇宙演化成裡面會有一顆內含需要的資料的硬碟。',
        'style' => "max-height:406px",
    ],
    355 => [
        'title' => '一對',
        'caption' => '臉書定義了人際關係。「我們本來昨晚會分手的，但是網路連不上」',
        'style' => "max-height:160px",
    ],
    349 => [
        'title' => '成功',
        'caption' => '安裝 OpenBSD 有 40% 的機率導致鯊魚攻擊，這是他們唯一的安全性問題。',
        'style' => "max-height:947px",
    ],
    327 => [
        'title' => '媽咪攻擊',
        'caption' => '她女兒的名字是「救命！我被困在駕照工廠裡面！」',
        'style' => "max-height:205px",
    ],
    323 => [
        'title' => '鮑爾默高點',
        'caption' => 'Apple 靠的是自動化杜松子酒靜脈注射。',
        'style' => "max-height:592px",
    ],
    308 => [
        'title' => '特別的人生',
        'caption' => '快，用 cat-6 的線做成登山背帶，跟我一起下去。',
        'style' => "max-height:421px",
    ],
    305 => [
        'title' => '第 34 條法則',
        'caption' => 'Lance，想進入大學盃比賽的話，試著拼 "Throbbing" 這個字。',
        'style' => "max-height:360px",
    ],
    303 => [
        'title' => '編譯中',
        'caption' => '「你在偷 LCD 嗎？」「對，不過我是趁 code 還在編譯的時候偷的」',
        'style' => "max-height:360px",
    ],
    285 => [
        'title' => '抗議的維基人',
        'caption' => '憲法已被半保護',
        'style' => "max-height:271px",
    ],
    246 => [
        'title' => '迷宮問題',
        'caption' => '這只是用來抓那些跑掉的邏輯學家的，其實每道門都出不去。',
        'style' => "max-height:455px",
    ],
    245 => [
        'title' => '地磚',
        'caption' => '最麻煩的是當人行道地磚的裂縫跟你的自然步伐不同步的時候。',
        'style' => "max-height:192px",
    ],
    244 => [
        'title' => '桌上角色扮演',
        'caption' => '我好像有把兩隻傳送戒指的其中一隻丟進海底過，結果滿有趣的',
        'style' => "max-height:454px",
    ],
    236 => [
        'title' => '蒐集人的想法',
        'caption' => '遊戲：找出哪兩種東西擺在一起結帳會讓收銀員最驚慌失措。  贏家：懷孕試劑跟單勾壁勾。',
        'style' => "max-height:447px",
    ],
    231 => [
        'title' => '人貓距離',
        'caption' => '是耶！你坐在那裡耶！你好啊，小貓咪！',
        'style' => "max-height:439px",
    ],
    208 => [
        'title' => '正規表示式',
        'caption' => '等等，少跳脫一個空白，咿～～～[敲敲敲]～～～',
        'style' => 'max-height:607px',
    ],
    202 => [
        'title' => 'Youtube',
        'caption' => '',
        'style' => 'max-height:860px',
    ],
    149 => [
        'title' => '三明治',
        'caption' => '設定帳號權限跟「老師說」是一樣的意思',
        'style' => 'max-height:299px',
    ],
];

//////////////////////////////////////////////

function die404($msg = "找不到這一頁，真傷心")
{
    global $twig; // i hate global...

    http_response_code(404);
    echo $twig->render('error_404.twig', [
       'page_title' => '網頁找不到（哭',
       'msg' => $msg,
    ]);
    die();
}