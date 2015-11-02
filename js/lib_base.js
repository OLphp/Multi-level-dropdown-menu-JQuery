	var g_url = '';
		
	function GoToUrl(_href)
	{
		window.location = _href;
	}
	
	function GoToGlobalUrl()
	{
		GoToUrl(g_url);
	}
		
	function gE(el)
	{ return document.getElementById(el); }
	
	function UcWords(str)
	{ return str.toLowerCase().replace(/\w+/g, function(s){return s.charAt(0).toUpperCase() + s.substr(1);}) }
	
	function Trim(str)
	{ str = str.replace(/\s+$/, ''); str = str.replace(/^\s+/, ''); return str; }
	
	function GetX(el)
	{
			var left = 0;
			do
			{
				left += el.offsetLeft || 0;																	
				el 	 =  el.offsetParent;
			} while (el);
			return left+(window.ie6||window.ie7?1:0);
	}
	
	function GetY(el)
	{
			var top = 0;
			do
			{
				top += el.offsetTop || 0;
				el 	=  el.offsetParent;
			} while (el);
			return top+(window.ie6||window.ie7?1:0);
	}
	
	function SetOpacity(obj,value)
	{
		obj.style.MozOpacity = value/100;
		obj.style.filter = "progid:DXImageTransform.Microsoft.Alpha(opacity="+value+")";
	}
	
	function Hide(el)
	{ el.style.display = 'none'; }
	
	function Show(el)
	{ el.style.display = 'block'; }
	
	function ValidateEmail(str)
	{
		var re_1 = /^([\w\-\.]+)@((\[([0-9]{1,3}\.){3}[0-9]{1,3}\])|(([\w\-]+\.)+)([a-zA-Z]{2,4}))$/i;
		return (Trim(str).length && Trim(str).match(re_1))?true:false;
	}
	
	function InArray(needle, haystack)
	{	
		for (var i = 0; i < haystack.length; i++)
			if (haystack[i] == needle) return true;
		return false;
	}
	
	function IsInt(v)
	{ return parseInt(v).toString()===v.toString(); }
	
	function ToInt(v)
	{ return (v*1); }
	
	function Sav(str,type) 
	{
		if(typeeof(str)=="undefined")	str="";
		if(typeeof(type)!="number") 	type=2;
		
		type = Math.max(0,Math.min(3,parseInt(type)));
		
		var from	= new Array(/</g,/>/g);
		var to		= new Array("&lt;","&gt;");
		if(type==1 || type==3)
		{
			from.push(/'/g);
			to.push("&#039;");
		}
		if(type==2 || type==3)
		{
			from.push(/"/g);
			to.push("&quot;");
		}
		for(var i in from)
			str=str.replace(from[i],to[i]);
		
		return str;
	}
	
	function AddLoadEvent(func)
	{
		var oldonload = window.onload;
		if (typeof window.onload != 'function')
			window.onload = func;
		else
		{
			window.onload = function()
			{
				oldonload();
				func();
			}
		}
	}
	
	function InnerToFromAjax(_url, oInsertTo)
	{
		var oAjax;

		if (window.XMLHttpRequest)
		{
			oAjax = new XMLHttpRequest();
		}
		else if (window.ActiveXObject)
		{
			try 
			{
				oAjax = new ActiveXObject('Msxml2.XMLHTTP');
			} catch (e){}
			try 
			{
				oAjax = new ActiveXObject('Microsoft.XMLHTTP');
			} catch (e){}
		}

		if (oAjax)
		{
			oAjax.onreadystatechange = function()
			{
				if (oAjax.readyState == 4 && oAjax.status == 200) 
				{
					var sContent = oAjax.responseText;
					oInsertTo.innerHTML = sContent;
				}
			};
			oAjax.open("POST", _url, true);
			oAjax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
			oAjax.send('is_ajax=1');
		}
		else
		{
			alert("AJAX not init!");
		}
	}
	
	function AlertFromAjax(_url)
	{
		var oAjax;

		if (window.XMLHttpRequest)
		{
			oAjax = new XMLHttpRequest();
		}
		else if (window.ActiveXObject)
		{
			try 
			{
				oAjax = new ActiveXObject('Msxml2.XMLHTTP');
			} catch (e){}
			try 
			{
				oAjax = new ActiveXObject('Microsoft.XMLHTTP');
			} catch (e){}
		}

		if (oAjax)
		{
			oAjax.onreadystatechange = function()
			{
				if (oAjax.readyState == 4 && oAjax.status == 200) 
				{
					alert( oAjax.responseText );
				}
			};
			oAjax.open("POST", _url, true);
			oAjax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
			oAjax.send('is_ajax=1');
		}
		else
		{
			alert("AJAX not init!");
		}
	}
	
	function ChangeLanguage(lang_id)
	{
		var str = document.location.href;
		str = str.replace(/lang=[\w&]+/gi, '');
		str = str.replace(/&$/gi, '');
		if (str.indexOf("?") > -1)
		{
			window.location=str+'&lang='+lang_id;
		}
		else
		{
			window.location='?lang='+lang_id;
		}
		
		return false;
	}
