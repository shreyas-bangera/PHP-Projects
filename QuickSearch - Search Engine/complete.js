$(function () {
			    $("#k").autocomplete({
			        source: function (request, response) {
			            console.log("source");
			            $.ajax({
			                url: "http://api.bing.net/qson.aspx?Query=" + encodeURIComponent(request.term) + "&JsonType=callback&JsonCallback=?",
			                dataType: "jsonp",
			                /*data: {
			                "Query": request.term,
			                "JsonType": "callback",
			                "JsonCallback" : "?"
			            },*/


			                success: function (data) {
			                    console.log("success!");
			                    var suggestions = [];
			                    $.each(data.SearchSuggestion.Section, function (i, val) {
			                        console.log("suggestion: " + val.Text);
			                        suggestions.push(val.Text);
			                    });
			                    response(suggestions);

			                }
			            });
			        }
			    });
			});