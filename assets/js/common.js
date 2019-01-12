function numcheck(event)
{
	var keypressed = event.which || event.keyCode;

	if((keypressed == 8 || keypressed == 13))
	{
		return true;
	}
	else if(keypressed >= 48 && keypressed <= 57)
	{
		return true;
	}
	/*else if(keypressed >= 96 && keypressed <= 105)
	{
		return true;
	}*/
	else
	{
		return false;
	}
}

function decCheck(event)
{
    var keypressed = event.which || event.keyCode;
    if((keypressed == 8 || keypressed == 13))
    {
        return true;
    }
    else if(keypressed >= 48 && keypressed <= 57)
    {
        return true;
    }
    else if(keypressed == 46)
    {
        return true;
    }
    else
    {
        return false;
    }
}

function logout()
{
    $.confirm({
       title: 'Logout?',
        content: 'Your time is out, you will be automatically logged out in 10 seconds.',
        autoClose: 'logoutUser|10000',
        buttons: {
            logoutUser: {
                text: 'logout',
                action: function () {
                    window.location = base_url+'logout.php';
                }
            },
            cancel: function () {
                $.alert('canceled');
            }
        }
    });
}

function isReadonly(attrname)
{
	if($('#'+attrname).attr('readonly') == 'readonly')
    {
        $.alert({
            title: 'Error!',
            content: 'Please click on edit icon to edit / change the values of the fields!!!',
            type: 'red',
            animation: 'scale',
            draggable: true,
        });                
        event.preventDefault();
        return false;
    }
}

var pleaswait={
    ajax:function(st)
    {
        this.show('load');
    },
    show:function(el)
    {
        if(this.getID(el))
        {
            this.getID(el).style.display='';
        }
    },
    getID:function(el)
    {
        return document.getElementById(el);
    }
}

function getColumnCount(tableid)
{
    var colCount = 0;
    $('#'+tableid+' tr:nth-child(1) th').each(function () {
        if ($(this).attr('colspan')) {
            colCount += +$(this).attr('colspan');
        } else {
            colCount++;
        }
    });
    return colCount;
}

function checkAll2(ele,classname)
{
    if (ele.checked)
    {
        $("."+classname).prop("checked", true);
    }
    else
    {
        $("."+classname).prop("checked", false);
    }
}