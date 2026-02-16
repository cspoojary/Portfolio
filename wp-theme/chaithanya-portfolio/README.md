# Chaithanya Portfolio WordPress Theme

A modern, responsive WordPress theme for a data science/ portfolio website.

## Features

- **Custom Post Types**: Projects, Certifications, and Experience
- **Responsive Design**: Mobile-friendly layout
- **Modern Styling**: Dark theme with teal accents
- **Social Media Integration**: Links to GitHub, LinkedIn, and Email
- **Portfolio Showcase**: Display your projects, certifications, and experience

## Installation

1. **Prepare the Theme**:
   - Copy the `chaithanya-portfolio` folder to your WordPress installation: `/wp-content/themes/`
   
2. **Activate the Theme**:
   - Go to WordPress Admin Dashboard
   - Navigate to Appearance → Themes
   - Find "Chaithanya Portfolio" and click "Activate"

3. **Copy Assets**:
   - Place your images in `/wp-content/themes/chaithanya-portfolio/images/`
   - Required images: `github.png`, `linkedin-logo.png`, `email.png`

## Theme Setup

### 1. Create Pages

Create the following pages in WordPress:

- **About** - About Me page
- **Projects** - Projects archive page
- **Experience** - Professional training/experience page
- **Certification** - Certifications page

### 2. Configure Theme Settings

1. Go to **Appearance** → **Customize**
2. Look for theme options to add:
   - Resume URL
   - GitHub URL
   - LinkedIn URL
   - Email Address

### 3. Add Content

#### Add Projects

1. Go to **Projects** → **Add New**
2. Add project title and description
3. Set featured image (optional)
4. Add project link via custom field `project_link`

#### Add Certifications

1. Go to **Certifications** → **Add New**
2. Add certification title
3. Set featured image (required)
4. Add custom fields:
   - `organization` - Certifying organization
   - `year` - Year earned

#### Add Experience

1. Go to **Experience** → **Add New**
2. Add position/title
3. Add job description/responsibilities
4. Add custom field `experience_meta` with period info

## File Structure

```
chaithanya-portfolio/
├── style.css                 # Main stylesheet
├── functions.php             # Theme functions & custom post types
├── header.php                # Header template
├── footer.php                # Footer template
├── index.php                 # Main/home template
├── template-parts/
│   ├── page-about.php       # About page
│   ├── archive-project.php  # Projects listing
│   ├── single-project.php   # Single project
│   ├── archive-experience.php # Experience listing
│   ├── single-experience.php # Single experience
│   ├── archive-certification.php # Certifications listing
│   └── single-certification.php  # Single certification
├── css/                      # Additional CSS files (optional)
├── images/                   # Theme images
└── README.md                 # This file
```

## Customization

### Change Colors

Edit `style.css` and search for:
- `#2dd4bf` - Primary teal color
- `#020617` - Dark background
- `#e5e7eb` - Text color

### Add Custom Menus

The theme supports a primary navigation menu. Go to **Appearance** → **Menus** to create and assign a menu.

### Modify Social Links

Update social URLs in:
1. **Customizer** settings, or
2. Edit `index.php` header section directly

## Requirements

- WordPress 5.0+
- PHP 7.2+
- No additional plugins required (though ACF is recommended for easier content management)

## Recommended Plugins

- **Advanced Custom Fields (ACF)** - For easier field management
- **Yoast SEO** - For SEO optimization
- **Worpress Importer** - For importing sample content

## Support

For issues or customizations, contact or refer to WordPress documentation.

## License

GPL v2 or later
