# LocationKum.net

مشروع Laravel لموقع LocationKum.net

## 🚀 المميزات

- مبني على Laravel 12
- ربط تلقائي مع GitHub
- إعداد قاعدة بيانات MySQL
- GitHub Actions للـ CI/CD

## 📋 المتطلبات

- PHP 8.3+
- Composer
- Node.js 18+
- MySQL

## 🛠️ التثبيت

1. استنساخ المشروع:
```bash
git clone https://github.com/Omani2310/locationkum.net.git
cd locationkum.net
```

2. تثبيت التبعيات:
```bash
composer install
npm install
```

3. إعداد البيئة:
```bash
cp .env.example .env
php artisan key:generate
```

4. إعداد قاعدة البيانات:
```bash
php artisan migrate
```

5. تشغيل الخادم:
```bash
php artisan serve
```

## 🔗 الربط التلقائي

المشروع مرتبط تلقائياً مع GitHub Actions. عند كل push إلى الفرع `main`، سيتم:

- ✅ فحص الكود
- ✅ تثبيت التبعيات
- ✅ بناء الأصول
- ✅ تشغيل الاختبارات
- ✅ إعداد النشر (قابل للتخصيص)

## 📁 هيكل المشروع

```
LOCATIONKUM.NET/
├── app/           # منطق التطبيق
├── config/        # ملفات الإعدادات
├── database/      # ملفات قاعدة البيانات
├── public/        # الملفات العامة
├── resources/     # الموارد (Views, CSS, JS)
├── routes/        # مسارات التطبيق
├── .github/       # GitHub Actions
└── .env           # ملف البيئة
```

## 🌐 الوصول للتطبيق

- التطوير المحلي: `http://127.0.0.1:8000`
- الإنتاج: سيتم تحديده لاحقاً

## 📝 المساهمة

1. Fork المشروع
2. إنشاء فرع جديد (`git checkout -b feature/AmazingFeature`)
3. Commit التغييرات (`git commit -m 'Add some AmazingFeature'`)
4. Push إلى الفرع (`git push origin feature/AmazingFeature`)
5. فتح Pull Request

## 📄 الترخيص

هذا المشروع مرخص تحت رخصة MIT.

## 📞 الدعم

للدعم والاستفسارات، يرجى التواصل عبر:
- GitHub Issues
- البريد الإلكتروني: [your-email@example.com]
