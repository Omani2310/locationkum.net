#!/bin/bash

# سكريبت النشر التلقائي
# يمكن استخدامه مع GitHub Actions أو النشر اليدوي

echo "🚀 بدء عملية النشر..."

# التحقق من وجود المتغيرات المطلوبة
if [ -z "$DEPLOY_PATH" ]; then
    echo "❌ خطأ: DEPLOY_PATH غير محدد"
    exit 1
fi

# إنشاء مجلد النشر إذا لم يكن موجوداً
mkdir -p $DEPLOY_PATH

# نسخ الملفات
echo "📁 نسخ الملفات..."
rsync -av --exclude='.git' --exclude='node_modules' --exclude='vendor' --exclude='.env' ./ $DEPLOY_PATH/

# الانتقال إلى مجلد النشر
cd $DEPLOY_PATH

# تثبيت التبعيات
echo "📦 تثبيت تبعيات Composer..."
composer install --no-dev --optimize-autoloader

echo "📦 تثبيت تبعيات NPM..."
npm ci --production

# بناء الأصول
echo "🔨 بناء الأصول..."
npm run build

# إعداد الأذونات
echo "🔐 إعداد الأذونات..."
chmod -R 755 storage bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache

# تشغيل الهجرات
echo "🗄️ تشغيل هجرات قاعدة البيانات..."
php artisan migrate --force

# مسح الكاش
echo "🧹 مسح الكاش..."
php artisan config:clear
php artisan cache:clear
php artisan view:clear
php artisan route:clear

echo "✅ تم النشر بنجاح!"
echo "🌐 يمكن الوصول للتطبيق على: $APP_URL" 