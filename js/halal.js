const Halal = {};

Halal.Cry = class{
    constructor(){
        this.name = "";//表示名
        this.id = "";//@unkoなどのid
        this.icon = "";//アイコンのurl
        this.contents = [];//image投稿があった場合のURLの配列。ない場合は空行列。
        this.type = "";//"Twitter"とか"Mastodon"とか。
        this.time = 0;//unixTime
        this.url = "";//tweet/tootへのリンク
        
        this.reCry = null;//retweet/boostの場合にHalal.Cryを持っている。違う場合はnull。
    }
}

Halal.Twitter = class{
    constructor(){
        
    }
}

Halal.Mastodon = class{
    constructor(){
        
    }    
}