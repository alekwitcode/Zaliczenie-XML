
import Twit from "twit";

const bearerKey = "AAAAAAAAAAAAAAAAAAAAAJtjJwEAAAAAN8MmWf6ZfzUbiORErnJJsRWWue0%3DyRymKlstxIGV5mzcuyWONjzMQoqhZeKpoeeNUwb2G5taCdwfzi";

const apiKey = "vLwjo7Zr5EXxv6WxV5yECo746";
const apiSecretKey = "eopxfQlHYFYFaRxqBVDOZ5wcMt5cxs6e8580Ps1VIXhxeC94re";
const accessToken = "1328777235751464962-sxuOQPw4Jo1fVJyp6DpFsk7EKckkg0";
const accessTokenSecret = "pDznOc6VFDzGXu8zDGwRnSAOBRHgH8KFVYnNCl5NB6I5T";

let T = new Twit({
    consumer_key: apiKey,
    consumer_secret: apiSecretKey,
    access_token: accessToken,
    access_token_secret: accessTokenSecret,
});

var params = {
    q: '#tesla since:2020-04-25' , 
    count: 10
}

//const d: Date = new Date()

function gotData(err:Error, data:Object, response:Object) {
    let tweets = data;
    console.log(tweets);
    // for (let i=0;i<tweets.lenght; i++) {
    //     console.log(tweets[i].text);
    // }
}




// function fetchByUsername(username: String) {
//     fetch('https://api.twitter.com/2/users/by/username/' + username);
// }


const btn = document.getElementById("test");
if(btn) {btn.onclick = () => {
    (async () => {
        T.get('search/tweets', params, gotData);
    })
}}

