(function() {
  var LimboValidator, exports;

  LimboValidator = (function() {

    function LimboValidator() {
        $(".create-account").data('validationStatus', true);
        $(".create-account").on("click", function (e) {
            e.preventDefault();
            $(".join-form input[type=text],input[type=password]").each(function () {
                if ($(this).hasClass("error"))
                    $(".create-account").data('validationStatus', false);
            });
            validationStatus = $(this).data("validation-status");
            if (validationStatus)
                $(this).parent().parent().submit();
        })
    }

    LimboValidator.prototype.isUserTaken = function(username) {
      var messagePlaceholder, promise;
      messagePlaceholder = $("#accountname").parent().next().find('span');
      return promise = $.getJSON("/limbo/register/checkUser", "username=" + username, function(response) {
        var isTaken;
        if (response.success) {
          isTaken = response.content.isTaken;
          if (isTaken) {
            messagePlaceholder.attr("class", false).addClass("error").html('Not Available!');
          }
          if (!isTaken) {
            return messagePlaceholder.attr("class", false).addClass("success").html('Available');
          }
        }
      });
    };

    LimboValidator.prototype.validatePasswords = function(password1, password2) {
      var similar;
      similar = false;
      if (password1 === password2) similar = true;
      if (password1 === "" && password2 === "") return false;
      if (!similar) {
        return $("#password, #reenter_password").attr("class", false).addClass("error");
      } else {
        return $("#password, #reenter_password").attr("class", false).addClass("success");
      }
    };

    LimboValidator.prototype.validateEmail = function(email) {
      var isValidEmail, re;
      re = new RegExp("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$");
      isValidEmail = re.test(email);
      if (email === "") return false;
      if (!isValidEmail) {
        return $(this).attr("class", false).addClass("error");
      } else {
        return $(this).attr("class", false).addClass("success");
      }
    };

    LimboValidator.prototype.validateEmailSimilarity = function(email1, email2) {
      var similar;
      similar = false;
      if (email1 === email2) similar = true;
      if (email1 === "" && email2 === "") return false;
      if (!similar) {
        return $("#email, #reenter_email").attr("class", false).addClass("error");
      } else {
        return $("#email, #reenter_email").attr("class", false).addClass("success");
      }
    };

    return LimboValidator;

  })();

  exports = this;

  exports.LimboValidator = LimboValidator;

}).call(this);
