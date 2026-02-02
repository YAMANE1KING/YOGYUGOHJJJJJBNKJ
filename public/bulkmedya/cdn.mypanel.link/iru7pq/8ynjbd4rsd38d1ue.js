const service_description = (service_id) => {
    const service = window.modules.siteOrder.services[service_id];
  
    if (service.description !== null && service.description.length > 0) {
      $(`[x-selector="service-description-extra"] > *`).removeClass('hidden').addClass('hidden')
      _.each(service.description.split('<br>'), row => {
        if (row.indexOf('[') === 0) {
          const row_data = row.replace('[', '').replace(']', '').split(',');
          const tag = row_data[0];
          const exists = row_data[1];
          if ((exists || 'yok').toLowerCase() !== 'yok') {
            $(`[x-selector="service-description-extra"] [x-selector="service-tag-${tag}"]`).removeClass('hidden')
            $(`[x-selector="service-description-extra"] [x-selector="service-tag-${tag}"] [x-selector="text"]`).text(exists);
          } else {
            $(`[x-selector="service-description-extra"] [x-selector="service-tag-${tag}"]`).addClass('hidden')
          }
        }
      })
  
      const __description = ((service.description || '') + '<br>');
      const filtered_description = _.chain(__description.split('<br>')).filter(d => {
        return (d.indexOf('[') === -1) ? true : false;
      }).value().join('<br>');
  
      $(`[x-selector="service-description-text"]`).html(filtered_description)
    }
  }
    
  $("#orderform-service").on('change',({target:{value}})=>{
    setTimeout(() => {
      service_description(value);
    },10)
  })  
  
  const send_ticket = (event, title = "Destek Bildirimi", fields = ["message"], success_message = 'Gönderildi.') => {
    // button
    // onclick="send_ticket(event,'Papara Ödeme Bildirimi', ['papara_id','papara_username','mesaj'],'Papara işleminiz incelendikten sonra hesabınıza tanımlanacaktır.')"
    event.preventDefault();
    console.log(title, fields);
    var subject = title;
    var message = "";
    const ticket_form = $(event.currentTarget).parents(`[x-selector~="ticket-form"]`)
    _.each(fields, f => {
      message += `\n${f.replace('_',' ')}\n${ticket_form.find(`[x-selector="${f}"]`).val()}\n`;
    })
  
    var formData = new FormData(document.getElementById(ticket_form.attr('id')));
    formData.append('TicketForm[subject]', subject);
    formData.append('TicketForm[message]', message);
  
    fetch("/ticket-create", {
      method: "POST",
      body: formData,
    }).then(res => res.json()).then(response => {
      if (response.error) console.log(response.error);
      if (response.status === 'error') {
        $(ticket_form).find(`[x-selector="ticket-form-alert"]`).removeClass('bg-green-600').addClass('bg-red-600').html(response.error).show()
        $(ticket_form).find(`button`).removeAttr('disabled').removeClass('disabled');
      } else {
        $(ticket_form).trigger("reset");
        $(ticket_form).find(`[x-selector="ticket-form-alert"]`).removeClass('bg-red-600').addClass('bg-green-600').html(success_message).show()
      }
  
    });
  
    return false;
  
  }
  
  const $params = (sParam) => {
    var sPageURL = window.location.search.substring(1), sURLVariables = sPageURL.split('&'), sParameterName, i;
  
    for (i = 0; i < sURLVariables.length; i++) {
      sParameterName = sURLVariables[i].split('=');
      if (sParameterName[0] === sParam) return typeof sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
    }
    return false;
  };
  
  const on_message_results_received = (data, success) => {
    $(`[x-selector="tg-messages"]`).children().remove();
    if (data && data.docs && data.page) list_messages(data.docs)
  }
  
  const search_messages = () => $.get(`${__.endpoint}/tgmessages/0`, on_message_results_received);
  
  const list_messages = (messages_data) => {
    const tgmsgs = $(`[x-selector="tg-messages"]`);
    const sorted = _.sortBy(messages_data, x => 0 - x.timestamp);
    _.each(sorted, msg_item => {
      const tgmsg = $(`[x-selector="tg-message"]`).clone();
      var options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
      tgmsg.find(`[x-selector="tg-date"]`).text((new Date(msg_item.timestamp)).toLocaleDateString('tr-TR',))
      tgmsg.find(`[x-selector="tg-text"]`).text(msg_item.text)
      tgmsg.show();
      tgmsg.removeAttr('x-selector');
      $(tgmsg).appendTo(tgmsgs);
    })
  }
  
  $(document).ready(() => {
    search_messages()
    $(`[x-selector~="details-root"] [x-selector~="details-close"]`).on('click', ({ currentTarget }) => {
      console.log('calling');
      $(currentTarget).parents('[x-selector~="details-root"]').attr('open', null)
    })
    
    
    
  })
  
  
  
  
  function ikon(a) {
    return a.indexOf("Instagram") >= 0 ? '<i class="fab fa-instagram mr-1"></i>'
    : a.indexOf("IGTV") >= 0 ? '<i class="fab fa-instagram mr-1"></i>' 
    : a.indexOf("Facebook") >= 0 ? '<i class="fab fa-facebook-square mr-1"></i>' 
    : a.indexOf("lnstagram İzlenme") >= 0 ? '<i class="fab fa-instagram mr-1"></i>' 
    : a.indexOf("lnstagram TV İzlenme") >= 0 ? '<i class="fab fa-instagram mr-1"></i>' 
    : a.indexOf("lnstagram REEL") >= 0 ? '<i class="fab fa-instagram mr-1"></i>' 
    : a.indexOf("lnstagram Otomatik") >= 0 ? '<i class="fab fa-instagram mr-1"></i>'
    : a.indexOf("YouTube") >= 0 ? '<i class="fab fa-youtube mr-1"></i>'
    : a.indexOf("Yandex") >= 0 ? '<i class="fab fa-yandex-international mr-1"></i>'
    : a.indexOf("Apple") >= 0 ? '<i class="fab fa-apple mr-1"></i>'
    : a.indexOf("Dailymotion") >= 0 ? '<i class="fab fa-dailymotion mr-1"></i>'
    : a.indexOf("Website") >= 0 ? '<i class="fas fa-globe mr-1"></i>'
    : a.indexOf("Twitter") >= 0 ? '<i class="fab fa-twitter mr-1"></i>'
    : a.indexOf("Periscope") >= 0 ? '<i class="fab fa-periscope mr-1"></i>'
    : a.indexOf("SoundCloud") >= 0 ? '<i class="fab fa-soundcloud mr-1"></i>'
    : a.indexOf("Spotify") >= 0 ? '<i class="fab fa-spotify mr-1"></i>'
    : a.indexOf("Clubhouse") >= 0 ? '<i class="fas fa-comment-music mr-1"></i>'
    : a.indexOf("Linkedin") >= 0 ? '<i class="fab fa-linkedin-in mr-1"></i>'
    : a.indexOf("Twitch") >= 0 ? '<i class="fab fa-twitch mr-1"></i>'
    : a.indexOf("Likee") >= 0 ? '<i class="fas fa-heart mr-1"></i>'
    : a.indexOf("Reddit") >= 0 ? '<i class="fab fa-reddit mr-1"></i>'
    : a.indexOf("Global") >= 0 ? '<i class="fas fa-globe mr-1"></i>'
    : a.indexOf("Tumblr") >= 0 ? '<i class="fab fa-tumblr mr-1"></i>'
    : a.indexOf("IMDB") >= 0 ? '<i class="fab fa-imdb mr-1"></i>'
    : a.indexOf("TikTok") >= 0 ? '<i class="fab fa-tiktok mr-1"></i>'
    : a.indexOf("Discord") >= 0 ? '<i class="fab fa-discord mr-1"></i>'
    : a.indexOf("Snapchat") >= 0 ? '<i class="fab fa-snapchat mr-1"></i>'
    : a.indexOf("Pinterest") >= 0 ? '<i class="fab fa-pinterest mr-1"></i>'
    : a.indexOf("Vimeo") >= 0 ? '<i class="fab fa-vimeo-v mr-1"></i>'
    : a.indexOf("Telegram") >= 0 ? '<i class="fab fa-telegram-plane mr-1"></i>'
    : a.indexOf("VK") >= 0 ? '<i class="fab fa-vk mr-1"></i>'
    : a.indexOf("Website") >= 0 ? '<i class="fas fa-globe mr-1"></i>'
    : a.indexOf("BulkMedya") >= 0 ? '<svg width=\"18\" height=\"12\" viewBox=\"0 0 20 12\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" class=\"mr-1\">\n<path d=\"M20 11.9104V0L14.1099 6L12 3.85075V6.62687L14.2418 8.91045L18.0659 5.01493V11.9104H20Z\" fill=\"currentColor\"></path>\n<path d=\"M8.05607 0H0L0.780848 2.19063H7.63707C7.63707 2.19063 8.76074 2.19063 8.76074 3.54766C8.76074 4.92407 7.63707 4.92407 7.63707 4.92407H2.36159L3.27575 7.13409H7.63707C7.63707 7.13409 8.76074 7.13409 8.76074 8.5105C8.76074 9.84815 7.63707 9.84815 7.63707 9.84815H4.68509L5.63735 12H8.05607C9.19877 12 10.989 10.7011 10.989 8.5105C10.989 6.66882 9.9796 6.00969 9.9796 6.00969C9.9796 6.00969 10.989 5.27302 10.989 3.54766C10.989 0.484652 8.45602 0 8.05607 0Z\" fill=\"currentColor\"></path>\n</svg>'
    : a.indexOf("Piyasanın En Ucuz Hizmetleri") >= 0 ? '<svg width=\"18\" height=\"12\" viewBox=\"0 0 20 12\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" class=\"mr-1\">\n<path d=\"M20 11.9104V0L14.1099 6L12 3.85075V6.62687L14.2418 8.91045L18.0659 5.01493V11.9104H20Z\" fill=\"currentColor\"></path>\n<path d=\"M8.05607 0H0L0.780848 2.19063H7.63707C7.63707 2.19063 8.76074 2.19063 8.76074 3.54766C8.76074 4.92407 7.63707 4.92407 7.63707 4.92407H2.36159L3.27575 7.13409H7.63707C7.63707 7.13409 8.76074 7.13409 8.76074 8.5105C8.76074 9.84815 7.63707 9.84815 7.63707 9.84815H4.68509L5.63735 12H8.05607C9.19877 12 10.989 10.7011 10.989 8.5105C10.989 6.66882 9.9796 6.00969 9.9796 6.00969C9.9796 6.00969 10.989 5.27302 10.989 3.54766C10.989 0.484652 8.45602 0 8.05607 0Z\" fill=\"currentColor\"></path>\n</svg>'
    : '<i class="fas fa-star mr-1"></i>'
  
  }
  
  function setList(a) {
    if (0 == a) {
      $("#orders-drop").empty(), $("#orderform-service option").each(function () {
        var a = ikon($(this).text());
        $("#orders-drop").append('<div x-selector="details-close" id="serviceItem" class="dropdown-item py-3 whitespace-normal cursor-pointer text-xs md:text-sm font-medium sa_bg_hover flex items-center" onclick="selectOrder(' + $(this).val() + ')">' + a + $(this).text() + "</div>")
      });
      var s = ikon(e = (i = document.getElementById("orderform-service")).options[i.selectedIndex].text);
      $("#serviceTitle").html(s + e)
    } else if (1 == a) {
      $("#category-drop").empty(), $("#orderform-category option").each(function () {
        var a = ikon($(this).text());
        $("#category-drop").append('<div x-selector="details-close" id="categoryItem" class="dropdown-item py-3 whitespace-normal cursor-pointer text-xs md:text-sm font-medium sa_bg_hover flex items-center" onclick="selectCategory(' + $(this).val() + ')">' + a + $(this).text() + "</div>")
      });
      var i, e;
      s = ikon(e = (i = document.getElementById("orderform-category")).options[i.selectedIndex].text);
      $("#categoryTitle").html(s + e)
    }
  }
  
  function selectOrder(a) {
    $(`#orders-drop [x-selector~="details-close"]`).parents('[x-selector~="details-root"]').attr('open', null)
    $("#orderform-service").val(a), $("#orderform-service").trigger("change");
    var s = ikon($("#orderform-service option[value='" + a + "']").text());
    $("#serviceTitle").html(s + $("#orderform-service option[value='" + a + "']").text())
  }
  
  function selectCategory(a) {
    $(`#category-drop [x-selector~="details-close"]`).parents('[x-selector~="details-root"]').attr('open', null)
    $("#orderform-category").val(a), $("#orderform-category").trigger("change");
    var s = ikon($("#orderform-category option[value='" + a + "']").text());
    $("#categoryTitle").html(s + $("#orderform-category option[value='" + a + "']").text())
  }
  $(document).ready(function () {
    var a = !1,
        s = $(".navbar-right-block").width() + $(".navbar-left-block").width() + $(".navbar-brand").width() + 30;
    $(window).on("resize", function () {
      i()
    });
    var i = function () {
      s <= $(window).width() ? a && a <= $(window).width() && ($("#navbar").addClass("navbar-collapse"), $("#navbar").removeClass("navbar-collapsed"), $("nav").removeClass("navbar-collapsed-before"), a = !1) : ($("#navbar").removeClass("navbar-collapse"), $("#navbar").addClass("navbar-collapsed"), $("nav").addClass("navbar-collapsed-before"), a = $(window).width())
    };
    $(window).width() >= 768 && i()
  }), $(document).ready(function () {
    setList(0), setList(1)
  }), $(function (a) {
    $("#orderform-service").change(function () {
      setList(0)
    }), $("#orderform-category").change(function () {
      setList(1)
    })
  }), $("#serviceItem").click(function () {
    $("#serviceTitle").html($(this).html())
  });
  
  
  
  
  
  /**
       * File: dark-mode.js
       *
       * Enables dark mode switching.
       */
  function wdsDarkMode() {
    const darkModeToggles = document.querySelectorAll("#color-mode-switch input");
  
    darkModeToggles.forEach((toggle) => {
      toggle.addEventListener("change", () => changeMode(toggle.value));
    });
  
    document.addEventListener("DOMContentLoaded", checkDarkMode);
  
    // Listen for a change in the system settings.
    window
      .matchMedia("(prefers-color-scheme: dark)")
      .addEventListener("change", (event) => {
      changeSystemMode();
    });
  
    /**
           * Change the mode when the user selects an option.
           *
           * @param {String} value The value of the current mode.
           *
           * @since November 19, 2020
           * @author Corey Collins
           */
    function changeMode(value) {
      if ("dark" == value) {
        document.querySelector("html").classList.add("dark");
        localStorage.theme = "dark";
        document.querySelector(`label[for="dark-switch"]`).classList.add('hidden');
        document.querySelector(`label[for="light-switch"]`).classList.remove('hidden');
      } else if ("light" == value) {
        document.querySelector("html").classList.remove("dark");
        localStorage.theme = "light";
        document.querySelector(`label[for="light-switch"]`).classList.add('hidden');
        document.querySelector(`label[for="dark-switch"]`).classList.remove('hidden');
      } else {
        localStorage.removeItem("theme");
        changeSystemMode();
      }
    }
  
    /**
           * Check to see if we have a mode set on page load so the mode is always used.
           *
           * @since November 19, 2020
           * @author Corey Collins
           */
    function checkDarkMode() {
      if ("dark" === localStorage.theme) {
        document.querySelector("#dark-switch").checked = true;
        document.querySelector("html").classList.add("dark");
        localStorage.theme = "dark";
      } else if ("light" === localStorage.theme) {
        document.querySelector("#light-switch").checked = true;
        document.querySelector("html").classList.remove("dark");
        localStorage.theme = "light";
      } else {
        document.querySelector("#system-switch").checked = true;
        changeSystemMode();
        localStorage.theme = "system";
      }
    }
  
    /**
           * Changes the color mode of the site when the system mode is changed, only if the system option is selected.
           *
           * @since November 19, 2020
           * @author Corey Collins
           */
    function changeSystemMode() {
      if (true == document.querySelector("#system-switch").checked) {
        localStorage.removeItem("theme");
  
        if (
          window.matchMedia &&
          window.matchMedia("(prefers-color-scheme: dark)").matches
        ) {
          document.querySelector("html").classList.add("dark");
        } else if (
          window.matchMedia &&
          window.matchMedia("(prefers-color-scheme: light)").matches
        ) {
          document.querySelector("html").classList.remove("dark");
        } else if (
          window.matchMedia &&
          window.matchMedia("(prefers-color-scheme: no-preference)").matches
        ) {
          document.querySelector("html").classList.remove("dark");
        }
      }
    }
  }
  
  // Fire off our function.
  wdsDarkMode();
  