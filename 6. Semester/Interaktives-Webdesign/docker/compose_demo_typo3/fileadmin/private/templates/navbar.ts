lib.navbar =  HMENU
lib.navbar {
  entryLevel = 0
 
  1 = TMENU
  1 {
    wrap = <ul class="nav navbar-nav"> | </ul>
    NO = 1
    NO    {
      wrapItemAndSub = <li> |</li>
      stdWrap.htmlSpecialChars = 1
      ATagTitle.field = title
      
    }
    ACT <.NO
    ACT {
      
      wrapItemAndSub = <li class="active"> | <li>
    }
  }
 
}

lib.subNavi =  HMENU
lib.subNavi{
  entryLevel = 1
 
  1 = TMENU
  1 {
    wrap = <ul> | </ul>
    NO = 1
    NO    {
      wrapItemAndSub = <li> |</li>
      stdWrap.htmlSpecialChars = 1
      ATagTitle.field = title
      
    }
    ACT <.NO
    ACT {
          wrapItemAndSub = <li class="active-2"> | <li>
    }
  }
}

###BREADCRUMB
breadcrumbText = TEXT
breadcrumbText.value = Sie sind hier: &nbsp;

lib.breadcrumb = COA
lib.breadcrumb {
  10 < breadcrumbText
  20 = HMENU
  20 {
    special = rootline    
    special.range = 1 | -1    
    1 = TMENU
    1{
      NO = 1
      NO.after = &nbsp;  | &nbsp;
      CUR = 1
      CUR.doNotLinkIt =1   
      }
    }
}

