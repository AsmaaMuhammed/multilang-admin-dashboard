<?php

if(!function_exists('getLocalLang'))
{
    function getLocalLang()
    {
        $getLocalIndex = Route::current()->getLocalization();
        $localLangName = Localization::getLocales()[$getLocalIndex]['name'];
        return $localLangName;
    }
}

if(!function_exists('getLocalIndex'))
{
    function getLocalIndex()
    {
        $getLocalIndex = Route::current()->getLocalization();
        return $getLocalIndex;
    }
}

if(!function_exists('getBodyDirection'))
{
    function getBodyDirection()
    {
        $getLocalIndex = Route::current()->getLocalization();
        return $getLocalIndex === 'ar' ? 'rtl' : 'ltr';
      
    }
}

?>