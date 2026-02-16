# Chaithanya Portfolio - Complete WordPress Theme Documentation

## Overview

This is a professional WordPress theme conversion of your existing HTML portfolio. It includes:

- ✅ **Custom Post Types**: Projects, Certifications, Experience
- ✅ **Responsive Design**: Mobile-friendly
- ✅ **Modern Dark Theme**: Teal accents
- ✅ **Social Media Integration**: GitHub, LinkedIn, Email
- ✅ **Customizable**: Theme Customizer support
- ✅ **SEO Ready**: Proper HTML structure

## 📁 Theme Structure

```
chaithanya-portfolio/
│
├── style.css                   (Main stylesheet - all CSS)
├── functions.php               (Theme setup & post types)
├── header.php                  (Site header)
├── footer.php                  (Site footer)
├── index.php                   (Home page)
├── page.php                    (Standard pages)
├── single.php                  (Single post/CPT view)
├── archive.php                 (Archives router)
│
├── template-parts/
│   ├── page-about.php          (About page template)
│   ├── archive-project.php     (Projects listing)
│   ├── single-project.php      (Single project)
│   ├── archive-experience.php  (Experience listing)
│   ├── single-experience.php   (Single experience)
│   ├── archive-certification.php (Certifications listing)
│   └── single-certification.php (Single certification)
│
├── css/                        (Room for additional CSS)
├── images/                     (Theme images)
├── README.md                   (Theme info)
└── LICENSE                     (GPL v2)
```

## 📋 File Descriptions

### Core Files

| File | Purpose |
|------|---------|
| `style.css` | Main stylesheet with all theming (responsive layout, colors, animations) |
| `functions.php` | WordPress hooks, custom post types, theme features, customizer options |
| `header.php` | HTML header, navigation, site branding |
| `footer.php` | Footer content and WordPress actions |
| `index.php` | Home page template |

### Template Files

| File | Purpose |
|------|---------|
| `page.php` | Template for standard WordPress pages |
| `single.php` | Template for single posts/custom post types |
| `archive.php` | Template for post/CPT listings - routes to specific archive templates |

### Template Parts (Specific Layouts)

| File | Purpose |
|------|---------|
| `page-about.php` | About section with skills and education |
| `archive-project.php` | List all projects |
| `single-project.php` | Individual project page |
| `archive-experience.php` | List professional experience |
| `single-experience.php` | Individual experience entry |
| `archive-certification.php` | List certifications |
| `single-certification.php` | Individual certification |

## 🔧 Custom Post Types

### 1. Project
**Menu URL**: WordPress Admin → Projects

**Fields**:
- Title (required)
- Content/Description
- Featured Image
- Custom Field: `project_link` (URL to project/GitHub)

**Archive URL**: `/project/` or `/project-name/`

**Example Data**:
```
Title: Credit Card Fraud Detection
Content: Machine learning project focused on detecting fraudulent credit card transactions using classification algorithms.
Featured Image: screenshot.png
project_link: https://github.com/cspoojary/Credit_card_fraud_detection
```

### 2. Certification
**Menu URL**: WordPress Admin → Certifications

**Fields**:
- Title (required)
- Featured Image (required)
- Custom Field: `organization` (e.g., "Udemy")
- Custom Field: `year` (e.g., "2024")

**Archive URL**: `/certification/`

**Example Data**:
```
Title: Cisco Certified Network Associate (CCNA)
Featured Image: ccna-badge.png
organization: Karnataka German Technical Training Institute (KGTTI)
year: 2024
```

### 3. Experience
**Menu URL**: WordPress Admin → Experience

**Fields**:
- Title (Job Position - Company)
- Content (Job responsibilities as bullet points)
- Custom Field: `experience_meta[period]` (Date range)

**Archive URL**: `/experience/`

**Example Data**:
```
Title: Data Science with AI Intern - Echobrain Pvt Ltd
Content:
• Optimized data workflows using Python and SQL
• Implemented basic ML algorithms for classification
• Applied SQL and ML concepts to project objectives
experience_meta[period]: 09/2025 – Present · Bangalore, Karnataka
```

## 🎨 Theme Customization

### Via Theme Customizer

**Path**: Appearance → Customize

**Available Options**:
- Resume URL
- GitHub URL
- LinkedIn URL
- Email Address

### Via Code

**Color Changes** (in `style.css`):
```css
/* Teal accent color */
color: #2dd4bf;

/* Dark background */
background: #020617;

/* Light text */
color: #e5e7eb;
```

**Text Content** (in template files):
- Edit `index.php` for home page text
- Edit `template-parts/page-about.php` for About section
- Use WordPress admin for other content

## 📱 Responsive Breakpoints

```css
@media (max-width: 768px) {
    /* Tablet and mobile styles */
    .navbar { flex-direction: column; }
    .skills-container { grid-template-columns: 1fr; }
    .grid { grid-template-columns: 1fr; }
}
```

## 🔗 Menu Structure

Create a menu with these items:
1. Home (front page)
2. About (page)
3. Projects (project archive)
4. Experience (experience archive)
5. Certification (certification archive)

**To Create Menu**:
1. Appearance → Menus
2. Create New Menu
3. Add pages and post types
4. Set to "Primary Menu"

## 📊 Home Page Sections

The `index.php` template displays:

1. **Header**: Site name + Resume button
2. **Hero Section**: 
   - Tagline: "CRAFTING DATA-DRIVEN SOLUTIONS"
   - Main heading with accent
   - Description
3. **Social Icons**: GitHub, LinkedIn, Email
4. **Navigation Buttons**: About, Projects, Experience, Certification

## 🔑 Key Functions (in functions.php)

```php
// Theme setup
chaithanya_portfolio_setup()

// Register custom post types
chaithanya_portfolio_register_post_types()

// Customizer options
chaithanya_portfolio_customize_register()

// Enqueue styles/scripts
chaithanya_portfolio_scripts()
```

## 🏗️ How to Extend

### Add Custom Post Type

```php
register_post_type( 'portfolio_item', array(
    'labels' => array(
        'name' => 'Portfolio Items',
        'singular_name' => 'Portfolio Item',
    ),
    'public' => true,
    'supports' => array( 'title', 'editor', 'thumbnail' ),
) );
```

### Add Custom Meta Field

Use the example from functions.php and add via WordPress admin, or install ACF plugin.

### Add New Page Template

1. Create `page-{slug}.php` in root or `template-parts/`
2. Add template header comment:
```php
<?php
/**
 * Template Name: My Page
 */
```
3. Assign via page editor

## 🚀 Deployment

### Pre-Launch Checklist

- [ ] All images uploaded to `/images/` folder
- [ ] All custom post types populated (5+ projects, 3+ certs, 2+ experience)
- [ ] Navigation menu created and assigned
- [ ] Theme customizer options filled in
- [ ] Home page set correctly
- [ ] Permalinks set to "Post name"
- [ ] All links tested
- [ ] Mobile responsiveness verified
- [ ] Contact information accurate
- [ ] Social links working

### Go Live

1. Test on staging environment
2. Verify all links work
3. Check mobile responsiveness
4. Test forms/contact methods
5. Set 404 page (optional)
6. Set up analytics if desired
7. Deploy to production

## 🔐 Security Tips

- Keep WordPress updated
- Use strong passwords
- Install security plugin (e.g., Wordfence)
- Regular backups
- Disable file editing: Add to wp-config.php
  ```php
  define( 'DISALLOW_FILE_EDIT', true );
  ```

## 💡 Best Practices

✅ **Do**:
- Keep CSS in `style.css`
- Use WordPress functions for URLs (`get_template_directory_uri()`)
- Update content regularly
- Backup before major changes
- Use featured images for all posts
- Keep descriptions concise

❌ **Don't**:
- Modify `functions.php` without testing
- Delete template files
- Use inline styles in templates
- Mix old HTML files with WordPress
- Use absolute paths in links

## 📞 Support Resources

- **WordPress Docs**: https://wordpress.org/documentation/
- **Theme Documentation**: See README.md
- **Installation Guide**: See INSTALLATION_GUIDE.md
- **Quick Start**: See QUICK_START.md

## 📝 Migration from HTML

### Convert HTML to WordPress

**Original Files**:
- `index.html` → Home page (index.php)
- `aboutme.html` → About page (page-about.php)
- `project.html` → Project archive + individual projects
- `experience.html` → Experience archive + entries
- `certifiction.html` → Certification archive + entries

**CSS**:
- All CSS combined into `style.css`
- No separate stylesheets loaded

**Images**:
- Move to `/images/` folder
- Reference in templates

## 🎯 SEO Optimization

This theme includes:
- Semantic HTML5 structure
- Proper heading hierarchy
- Image alt attributes
- Schema.org compatibility
- Open Graph ready

### To Enhance:
- Install Yoast SEO plugin
- Add meta descriptions
- Optimize images
- Internal linking structure
- Mobile optimization (built-in)

## 📞 License

GPL v2 or later - Free to use and modify

---

**Created for**: Chaithanya S Poojary  
**Version**: 1.0.0  
**Requires**: WordPress 5.0+, PHP 7.2+

Enjoy your new WordPress portfolio! 🎉
