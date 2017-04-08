var fs = require('fs');
var NaturalLanguageUnderstandingV1 = require('watson-developer-cloud/natural-language-understanding/v1.js');
var nlu = new NaturalLanguageUnderstandingV1({
  "username": "0283cb2f-c798-4403-9ad6-f5a829e90107",
  "password": "1DF15bZZfwng"
  version_date: NaturalLanguageUnderstandingV1.VERSION_DATE_2017_02_27
});
nlu.analyze({
  'html': file_data, // Buffer or String
  'features': {
    'concepts': {},
    'keywords': {},
  }
}, function(err, response) {
     if (err)
       console.log('error:', err);
     else
       console.log(JSON.stringify(response, null, 2));
 });



var PersonalityInsightsV3 = require('watson-developer-cloud/personality-insights/v3');
var personality_insights = new PersonalityInsightsV3({
  "username": "a75809f4-1c5b-4876-bd14-d71a636c8399",
  "password": "3mZ7BLV5d0HT"
  version_date: '2016-10-19'
});
personality_insights.profile({
  text: 'Enter more than 100 unique words here...',
  consumption_preferences: true
  },
  function (err, response) {
    if (err)
      console.log('error:', err);
    else
      console.log(JSON.stringify(response, null, 2));
});