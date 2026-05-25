config {
  contentObjectExceptionHandler = 0
  disablePrefixComment = 1
  doctype = html5
}

page = PAGE
page {
  meta {
    keywords.field = keywords
    description.field = description
    viewport = width=device-width, initial-scale=1.0
  }

  10 = FLUIDTEMPLATE
  10 {
    file = fileadmin/private/templates/Main.html
    partialRootPath = fileadmin/private/partials
    layoutRootPath = fileadmin/private/layouts

    variables {
      normal = COA
      normal.10 < styles.content.get
      normal.10.select.where = colPos=0

      rechts = COA
      rechts.10 < styles.content.get
      rechts.10.select.where = colPos=1
    }
  }

  includeCSS.bootmin = fileadmin/public/css/bootstrap.min.css
  includeCSS.style = fileadmin/public/css/styles.css

  includeJS.jquery = fileadmin/public/js/jquery.js
  includeJSFooter.bootjs = fileadmin/public/js/bootstrap.min.js
}
