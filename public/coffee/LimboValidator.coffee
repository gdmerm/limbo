class LimboValidator

	isUserTaken: (username) ->
		messagePlaceholder = $("#accountname").parent().next().find('span')
		promise = $.getJSON "/limbo/register/checkUser", "username=#{username}", (response) ->
			if response.success
				isTaken = response.content.isTaken
				messagePlaceholder.attr("class", false).addClass("error").html 'Not Available!' if isTaken
				messagePlaceholder.attr("class", false).addClass("success").html 'Available' if not isTaken
	
	validatePasswords: (password1, password2) ->
		similar = false
		similar = true if password1 is password2
		if password1 is "" and password2 is "" then return false
		if not similar
			$("#password, #reenter_password").attr("class", false).addClass "error"
		else
			$("#password, #reenter_password").attr("class", false).addClass "success"

	validateEmail: (email) ->
		re =  new RegExp "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$"
		isValidEmail = re.test(email)
		return false if email is ""
		if not isValidEmail
      $(this).attr("class", false).addClass("error")
    else
      $(this).attr("class", false).addClass("success")

	validateEmailSimilarity: (email1, email2) ->
		similar = false
		similar = true if email1 is email2
		if email1 is "" and email2 is "" then return false
		if not similar
			$("#email, #reenter_email").attr("class", false).addClass "error"
		else
			$("#email, #reenter_email").attr("class", false).addClass "success"
			

	

exports = this
exports.LimboValidator = LimboValidator
				
