# Fonts Folder

This folder is for custom font files if you want to host fonts locally instead of using Google Fonts CDN.

## Current Setup

The project currently uses **Poppins** font from Google Fonts CDN for optimal loading performance.

## Adding Custom Fonts

If you want to use custom fonts:

1. **Add font files** to this folder
2. **Update CSS** to reference local fonts
3. **Include font formats** for browser compatibility

### Supported Font Formats

- **WOFF2** - Modern browsers (recommended)
- **WOFF** - Older browser support
- **TTF** - Fallback for very old browsers

### Example CSS Integration

```css
/* Add to css/style.css */
@font-face {
    font-family: 'CustomFont';
    src: url('../fonts/CustomFont.woff2') format('woff2'),
         url('../fonts/CustomFont.woff') format('woff'),
         url('../fonts/CustomFont.ttf') format('truetype');
    font-weight: 400;
    font-style: normal;
    font-display: swap;
}

body {
    font-family: 'CustomFont', 'Poppins', sans-serif;
}
```

## Font Loading Best Practices

1. **Use font-display: swap** for better performance
2. **Preload critical fonts** in HTML head
3. **Subset fonts** to include only needed characters
4. **Compress font files** for faster loading

### Preloading Fonts

Add to HTML `<head>`:

```html
<link rel="preload" href="fonts/CustomFont.woff2" as="font" type="font/woff2" crossorigin>
```

## Font Licensing

Ensure you have proper licensing for any commercial fonts:

- ✅ **Free fonts**: Google Fonts, Adobe Fonts, Font Squirrel
- ⚠️ **Commercial fonts**: Check license terms
- ❌ **Pirated fonts**: Never use unlicensed fonts

## Recommended Free Font Sources

- **Google Fonts** - fonts.google.com
- **Adobe Fonts** - fonts.adobe.com
- **Font Squirrel** - fontsquirrel.com
- **DaFont** - dafont.com (check licenses)

## File Naming Convention

Use descriptive names:
- `Poppins-Regular.woff2`
- `Poppins-Bold.woff2`
- `Poppins-Italic.woff2`