$(document).ready(function ()
{
    setTimeout(function()
    {
        $('select[name="data-tables_length"]').attr('class','border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm pl-4 pr-0 text-sm');
        $('select[name="data-tables_length"]').attr('style','margin-bottom:10px');
        $('input[aria-controls="data-tables"]').attr('class','border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm');
    }, 300);
});
