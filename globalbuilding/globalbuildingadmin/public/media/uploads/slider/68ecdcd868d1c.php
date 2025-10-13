<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>With Firebase</title>
</head>
<body>

  adb devices
adb tcpip 5555
adb connect 192.168.29.108:5555








    <h2>1. npm uninstall -g react-native-cli</h2>

    <h2>2. npm install -g @react-native-community/cli</h2>

    <h2>3. npx react-native init projectname<br>
        or direct cmd<br>
           npx @react-native-community/cli init projectname<br>
           npx @react-native-community/cli init BUNZZ
    </h2>

    <h2>4. change app name<br>
            android/app/src/main/res/values/strings.xml
    </h2>

    <h2>5. mkdir -p android/app/src/main/assets</h2>

    <h2>6. npx react-native bundle --platform android --dev false --entry-file index.js --bundle-output android/app/src/main/assets/index.android.bundle --assets-dest android/app/src/main/res/</h2>

    <strong>android/.gradle right click/property/read only checkbox unchack apply/save</strong>

    <h2>7. if u want to connect android studio emulater then do this<br>
           cd chikbazar<br>
           cd android<br>
           npx react-native run-android<br>
           <strong>--if work properly then ok else use this--</strong><br>
           npx react-native run-android --verbose
    </h2>

    <h2>8. Add your custom logo: Place your logo (e.g., logo.png) in the appropriate folder, such as Azmal/android/app/src/main/res/mipmap-hdpi(all folder change image) for Android or Azmal/ios/YourAppName/Images.xcassets for iOS.</h2>

    <h2>9. For Android, update the AndroidManifest.xml or use the mipmap folders to ensure the logo is set for the launcher icon.</h2>

    <h2>8. Modify Your App to Display WebView(app.tsx)</h2>

    <h2>9. App.tsx</h2>
    <p>

      import React, { useRef, useState, useEffect } from 'react';
      import { BackHandler, View, ActivityIndicator, Alert, Platform } from 'react-native';
      import { WebView } from 'react-native-webview';
      import DeviceInfo from 'react-native-device-info';
      import messaging from '@react-native-firebase/messaging';
      import { request, PERMISSIONS, RESULTS } from 'react-native-permissions';

      const App = () => {
        const webviewRef = useRef<WebView | null>(null);
        const [canGoBack, setCanGoBack] = useState(false);
        const [deviceId, setDeviceId] = useState<string>('');

        useEffect(() => {
          const requestNotificationPermission = async () => {
            try {
              if (Platform.OS === 'android' && Platform.Version >= 33) {
                const result = await request(PERMISSIONS.ANDROID.POST_NOTIFICATIONS);
                if (result === RESULTS.GRANTED) {
                  console.log('Notification permission granted');
                } else if (result === RESULTS.DENIED) {
                  Alert.alert(
                    'Notification Permission',
                    'Notification permissions are required for the app to function properly. Please allow them in your settings.',
                  );
                } else if (result === RESULTS.BLOCKED) {
                  Alert.alert(
                    'Notification Permission',
                    'Permission is permanently denied. Please enable it manually in Settings > App Info > Notifications.',
                  );
                }
              } else {
                console.log('Notification permission not required for this Android version.');
              }
            } catch (error) {
              console.error('Error requesting notification permission:', error);
            }
          };
          

          const initializeMessaging = async () => {
            try {
              const token = await messaging().getToken();
              console.log('FCM Token:', token);

              await messaging().subscribeToTopic('allnoti2');
              console.log('Subscribed to topic: allnoti2');

              const unsubscribeOnMessage = messaging().onMessage(async remoteMessage => {
                Alert.alert(
                  remoteMessage.notification?.title || 'Notification',
                  remoteMessage.notification?.body || 'You have a new message.',
                );
              });

              return unsubscribeOnMessage;
            } catch (error) {
              console.error('Error initializing messaging:', error);
            }
          };

          requestNotificationPermission();
          const unsubscribeMessaging = initializeMessaging();

          return () => {
            if (unsubscribeMessaging) {
              unsubscribeMessaging.then(unsubscribe => unsubscribe && unsubscribe());
            }
          };
        }, []);

        useEffect(() => {
          DeviceInfo.getUniqueId().then(id => setDeviceId(id));

          const backAction = () => {
            if (canGoBack && webviewRef.current) {
              webviewRef.current.goBack();
              return true;
            }
            return false;
          };

          const backHandler = BackHandler.addEventListener('hardwareBackPress', backAction);

          return () => backHandler.remove();
        }, [canGoBack]);

        return (
          <View style={{ flex: 1 }}>
            {deviceId ? (
              <WebView
                ref={webviewRef}
                source={{ uri: `https://chikbazar.com/app/user/login.php?device_id=${deviceId}` }}
                onNavigationStateChange={(navState) => setCanGoBack(navState.canGoBack)}
              />
            ) : (
              <ActivityIndicator size="large" color="#0000ff" />
            )}
          </View>
        );
      };

      export default App;



    </p>

    <h2>10. install dependency<br>

        ==== npm install react-native-webview<br>
        ==== npm install react-native-device-info<br>

        npm install firebase
        npm install @react-native-firebase/app @react-native-firebase/messaging

        npm install react-native-permissions

        ---------------------------------------
    </h2>

    <h2>11. android\app/ add google-services file from firebase console</h2>

    <h2>12. from console a/c [not neccesery]<br> 

        const firebaseConfig = {
          apiKey: "AIzaSyCE7lQUHjW6rwJEhNMq2ZZM6Gn7HnnVbnU",
          authDomain: "chikbazar.firebaseapp.com",
          databaseURL: "https://chikbazar-default-rtdb.firebaseio.com",
          projectId: "chikbazar",
          storageBucket: "chikbazar.firebasestorage.app",
          messagingSenderId: "1098487629011",
          appId: "1:1098487629011:web:81cc871a74f2273b2a8026",
          measurementId: "G-WRJHDB7CZV"
        };
    </h2>

    <h2>13. android/build.gradle</h2>
    <p>
      buildscript {
          ext {
              buildToolsVersion = "35.0.0"
              minSdkVersion = 24
              compileSdkVersion = 35
              targetSdkVersion = 34
              ndkVersion = "26.1.10909125"
              kotlinVersion = "1.9.24"
          }
          repositories {
              google()
              mavenCentral()
          }
          dependencies {
              classpath("com.android.tools.build:gradle:8.1.2")
              classpath("com.facebook.react:react-native-gradle-plugin")
              classpath("org.jetbrains.kotlin:kotlin-gradle-plugin:$kotlinVersion")
              classpath('com.google.gms:google-services:4.3.15')
          }
      }
    </p>


    <h2>15. android/app/build.gradle</h2>
    <p>
      apply plugin: "com.android.application"
      apply plugin: "org.jetbrains.kotlin.android"
      apply plugin: "com.facebook.react"

      react {
          autolinkLibrariesWithApp()
      }

      def enableProguardInReleaseBuilds = false
      def jscFlavor = 'org.webkit:android-jsc:+'

      android {
          ndkVersion rootProject.ext.ndkVersion
          buildToolsVersion rootProject.ext.buildToolsVersion
          compileSdk rootProject.ext.compileSdkVersion

          namespace "com.chikbazar"
          defaultConfig {
              applicationId "com.chikbazar"
              minSdkVersion rootProject.ext.minSdkVersion
              targetSdkVersion rootProject.ext.targetSdkVersion
              versionCode 1
              versionName "1.0"
          }

          signingConfigs {
              debug {
                  storeFile file('debug.keystore')
                  storePassword 'android'
                  keyAlias 'androiddebugkey'
                  keyPassword 'android'
              }
              release {
                  storeFile file(System.getenv("MYAPP_RELEASE_STORE_FILE") ?: 'E:/xamp/htdocs/7reactnative/chickbazar/android/app/chickbazar.jks')
                  storePassword System.getenv("MYAPP_RELEASE_STORE_PASSWORD") ?: 'Azmal@123'
                  keyAlias System.getenv("MYAPP_RELEASE_KEY_ALIAS") ?: 'mykey'
                  keyPassword System.getenv("MYAPP_RELEASE_KEY_PASSWORD") ?: 'Azmal@123'
              }
          }

          buildTypes {
              debug {
                  signingConfig signingConfigs.debug
              }
              release {
                  signingConfig signingConfigs.debug
                  minifyEnabled enableProguardInReleaseBuilds
                  proguardFiles getDefaultProguardFile("proguard-android.txt"), "proguard-rules.pro"
              }
          }
      }

      dependencies {
          implementation("com.facebook.react:react-android")

          if (hermesEnabled.toBoolean()) {
              implementation("com.facebook.react:hermes-android")
          } else {
              implementation jscFlavor
          }

          implementation platform('com.google.firebase:firebase-bom:32.0.0')
          implementation 'com.google.firebase:firebase-messaging'
          implementation 'com.google.firebase:firebase-analytics'
      }

      apply plugin: 'com.google.gms.google-services'

    </p>

    <h2>16. android/app/src/main/AndroidManifest.xml</h2>
    <p>
      <manifest xmlns:android="http://schemas.android.com/apk/res/android"
    xmlns:tools="http://schemas.android.com/tools">
          <uses-permission android:name="android.permission.INTERNET" />
          <uses-permission android:name="android.permission.RECEIVE_BOOT_COMPLETED" />
          <uses-permission android:name="android.permission.WAKE_LOCK" />
          <uses-permission android:name="com.google.android.c2dm.permission.RECEIVE" />
          <uses-permission android:name="android.permission.POST_NOTIFICATIONS" tools:targetApi="33" />

          <application
              android:name=".MainApplication"
              android:label="@string/app_name"
              android:icon="@mipmap/ic_launcher"
              android:roundIcon="@mipmap/ic_launcher_round"
              android:allowBackup="false"
              android:theme="@style/AppTheme"
              android:supportsRtl="true">

              <service
                  android:name="io.invertase.firebase.messaging.ReactNativeFirebaseMessagingService"
                  android:exported="true"
                  tools:replace="android:exported">
                  <intent-filter>
                      <action android:name="com.google.firebase.MESSAGING_EVENT" />
                  </intent-filter>
              </service>

              <activity
                  android:name=".MainActivity"
                  android:label="@string/app_name"
                  android:configChanges="keyboard|keyboardHidden|orientation|screenLayout|screenSize|smallestScreenSize|uiMode"
                  android:launchMode="singleTask"
                  android:windowSoftInputMode="adjustResize"
                  android:exported="true">
                  <intent-filter>
                      <action android:name="android.intent.action.MAIN" />
                      <category android:name="android.intent.category.LAUNCHER" />
                  </intent-filter>
              </activity>

          </application>
      </manifest>

    </p>


    <h2>android/app/src/mainjava/mainactivity.kt</h2>
    <p>package com.chikbazar

      import android.app.NotificationChannel
      import android.app.NotificationManager
      import android.content.pm.PackageManager
      import android.os.Build
      import android.os.Bundle
      import androidx.core.app.ActivityCompat
      import androidx.core.content.ContextCompat

      import com.facebook.react.ReactActivity
      import com.facebook.react.ReactActivityDelegate
      import com.facebook.react.defaults.DefaultNewArchitectureEntryPoint.fabricEnabled
      import com.facebook.react.defaults.DefaultReactActivityDelegate
      import com.google.firebase.messaging.FirebaseMessaging

      class MainActivity : ReactActivity() {

          private val notificationChannelId = "default_channel"
          private val notificationChannelName = "Default Channel"

          /**
           * Returns the name of the main component registered from JavaScript. This is used to schedule
           * rendering of the component.
           */
          override fun getMainComponentName(): String = "chikbazar"

          /**
           * Returns the instance of the [ReactActivityDelegate]. We use [DefaultReactActivityDelegate]
           * which allows you to enable New Architecture with a single boolean flags [fabricEnabled]
           */
          override fun createReactActivityDelegate(): ReactActivityDelegate =
              DefaultReactActivityDelegate(this, mainComponentName, fabricEnabled)

          override fun onCreate(savedInstanceState: Bundle?) {
              super.onCreate(savedInstanceState)
              createNotificationChannel()

              // Check for notification permission on Android 13 and higher
              if (Build.VERSION.SDK_INT >= Build.VERSION_CODES.TIRAMISU) {
                  if (ContextCompat.checkSelfPermission(this, android.Manifest.permission.POST_NOTIFICATIONS)
                      != PackageManager.PERMISSION_GRANTED) {
                      ActivityCompat.requestPermissions(
                          this,
                          arrayOf(android.Manifest.permission.POST_NOTIFICATIONS),
                          1
                      )
                  }
              }

              // Handle Firebase Messaging Token
              FirebaseMessaging.getInstance().token.addOnCompleteListener { task ->
                  if (task.isSuccessful) {
                      val token = task.result
                      println("FCM Token: $token")
                  }
              }
          }

          private fun createNotificationChannel() {
              // Create the notification channel for devices running Android 8.0 (API level 26) and above
              if (Build.VERSION.SDK_INT >= Build.VERSION_CODES.O) {
                  val channel = NotificationChannel(
                      notificationChannelId,
                      notificationChannelName,
                      NotificationManager.IMPORTANCE_DEFAULT
                  )
                  channel.description = "Default notification channel"
                  val notificationManager: NotificationManager =
                      getSystemService(NotificationManager::class.java)
                  notificationManager.createNotificationChannel(channel)
              }
          }
      }
      </p>



    <h2>17. cd android</h2>

    <h2>18. ./gradlew clean --warning-mode all</h2>

    <h2>19. ./gradlew assembleRelease
        ./gradlew build --warning-mode all
       <br><strong>check app in</strong> 
       D:\xamp\htdocs\reactwebapp\Azmal\android\app\build\outputs\apk\release
   </h2>

=====================================================================================

    <h2><strong>Abb file</strong></h2>

    <h2>1. keytool -genkeypair -v -keystore motorstatetax.jks -keyalg RSA -keysize 2048 -validity 10000 -dname "CN=MOTOR STATE TAX"
    </h2>

    <h2>2. add code in gradle.property<br>
    <!-- bottom me -->
    MYAPP_RELEASE_STORE_FILE=D:/xampp/htdocs/2reactnativewebapp/BUNZZ/android/bunzz.jks
    MYAPP_RELEASE_KEY_ALIAS=mykey
    MYAPP_RELEASE_STORE_PASSWORD=Azmal@123
    MYAPP_RELEASE_KEY_PASSWORD=Azmal@123
    </h2>

    <h2>3. android/app/build.gradle<br>
      apply plugin: "com.android.application"
      apply plugin: "org.jetbrains.kotlin.android"
      apply plugin: "com.facebook.react"

      react {
          autolinkLibrariesWithApp()
      }

      def enableProguardInReleaseBuilds = false

      def jscFlavor = 'io.github.react-native-community:jsc-android:2026004.+'

      android {
          ndkVersion rootProject.ext.ndkVersion
          buildToolsVersion rootProject.ext.buildToolsVersion
          compileSdk rootProject.ext.compileSdkVersion

          namespace "com.bunzz"
          defaultConfig {
              applicationId "com.bunzz"
              minSdkVersion rootProject.ext.minSdkVersion
              targetSdkVersion rootProject.ext.targetSdkVersion
              versionCode 1
              versionName "1.0"
          }

          signingConfigs {
              debug {
                  storeFile file('debug.keystore')
                  storePassword 'android'
                  keyAlias 'androiddebugkey'
                  keyPassword 'android'
              }
              release {
                  storeFile file(System.getenv("MYAPP_RELEASE_STORE_FILE") ?: "D:/xampp/htdocs/2reactnativewebapp/BUNZZ/android/bunzz.jks")
                  storePassword System.getenv("MYAPP_RELEASE_STORE_PASSWORD") ?: 'Azmal@123'
                  keyAlias System.getenv("MYAPP_RELEASE_KEY_ALIAS") ?: 'mykey'
                  keyPassword System.getenv("MYAPP_RELEASE_KEY_PASSWORD") ?: 'Azmal@123'
              }
          }

          buildTypes {
              debug {
                  signingConfig signingConfigs.debug
              }
              release {
                  signingConfig signingConfigs.release
                  minifyEnabled enableProguardInReleaseBuilds
                  proguardFiles getDefaultProguardFile("proguard-android.txt"), "proguard-rules.pro"
              }
          }
      }

      dependencies {
          implementation("com.facebook.react:react-android")
          if (hermesEnabled.toBoolean()) {
              implementation("com.facebook.react:hermes-android")
          } else {
              implementation jscFlavor
          }
          implementation platform('com.google.firebase:firebase-bom:32.0.0')
          implementation 'com.google.firebase:firebase-messaging'
      }

      apply plugin: 'com.google.gms.google-services'
    </h2>

    <h2>20. for bundle<br>
      ./gradlew bundleRelease<br>
      android/app/build/outputs/bundle/release/app-release.aab
    </h2>
    

===========================================================

firebase console

1. create a project
2. Get started by adding Firebase to your app(select web)
3. add app me android select krna he 
4. json file bna kr 
5. service acount me jakr new private key genrate krni he
6. project overview me jakr web ke lia add new app sekect web





<!-- with splash screen -->
import React, { useRef, useState, useEffect } from 'react';
      import { BackHandler, View, ActivityIndicator, Alert, Platform } from 'react-native';
      import { WebView } from 'react-native-webview';
      import DeviceInfo from 'react-native-device-info';
      import messaging from '@react-native-firebase/messaging';
      import { request, PERMISSIONS, RESULTS } from 'react-native-permissions';

      const App = () => {
        const webviewRef = useRef<WebView | null>(null);
        const [canGoBack, setCanGoBack] = useState(false);
        const [deviceId, setDeviceId] = useState<string>('');
        const [showSplash, setShowSplash] = useState(true);

        useEffect(() => {
          // Show splash screen for 3 seconds
          

          const requestNotificationPermission = async () => {
            try {
              if (Platform.OS === 'android' && Platform.Version >= 33) {
                const result = await request(PERMISSIONS.ANDROID.POST_NOTIFICATIONS);
                if (result === RESULTS.GRANTED) {
                  console.log('Notification permission granted');
                } else if (result === RESULTS.DENIED) {
                  Alert.alert(
                    'Notification Permission',
                    'Notification permissions are required for the app to function properly. Please allow them in your settings.',
                  );
                } else if (result === RESULTS.BLOCKED) {
                  Alert.alert(
                    'Notification Permission',
                    'Permission is permanently denied. Please enable it manually in Settings > App Info > Notifications.',
                  );
                }
              } else {
                console.log('Notification permission not required for this Android version.');
              }
            } catch (error) {
              console.error('Error requesting notification permission:', error);
            }
          };
          

          const initializeMessaging = async () => {
            try {
              const token = await messaging().getToken();
              console.log('FCM Token:', token);

              await messaging().subscribeToTopic('allnoti2');
              console.log('Subscribed to topic: allnoti2');

              const unsubscribeOnMessage = messaging().onMessage(async remoteMessage => {
                Alert.alert(
                  remoteMessage.notification?.title || 'Notification',
                  remoteMessage.notification?.body || 'You have a new message.',
                );
              });

              return unsubscribeOnMessage;
            } catch (error) {
              console.error('Error initializing messaging:', error);
            }
          };

          requestNotificationPermission();
          const unsubscribeMessaging = initializeMessaging();

          return () => {
            if (unsubscribeMessaging) {
              unsubscribeMessaging.then(unsubscribe => unsubscribe && unsubscribe());
            }
          };
        }, []);

        useEffect(() => {
          const splashTimer = setTimeout(() => {
            setShowSplash(false);
          }, 3000);
          
          DeviceInfo.getUniqueId().then(id => setDeviceId(id));

          const backAction = () => {
            if (canGoBack && webviewRef.current) {
              webviewRef.current.goBack();
              return true;
            }
            return false;
          };

          const backHandler = BackHandler.addEventListener('hardwareBackPress', backAction);

          return () => {
            clearTimeout(splashTimer);
            backHandler.remove();
          };
        }, [canGoBack]);

        return (
          <View style={{ flex: 1 }}>
            {showSplash ? (
              <WebView source={{ uri: 'file:///android_asset/splash.html' }} />
            ) : deviceId ? (
              <WebView
                ref={webviewRef}
                source={{ uri: `https://bunzz.in/app/user/login.php?device_id=${deviceId}` }}
                onNavigationStateChange={(navState) => setCanGoBack(navState.canGoBack)}
              />
            ) : (
              <ActivityIndicator size="large" color="#0000ff" />
            )}
          </View>
        );
      };

      export default App;


      go to android\app\src\main\assets
      create splash.html file add 

      <!DOCTYPE html>
      <html lang="en">
      <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Splash Screen</title>
          <style>
              body {
                  display: flex;
                  justify-content: center;
                  align-items: center;
                  height: 100vh;
                  margin: 0;
                  background-color: white;
              }
              /* img {
                  width: 300px;
                  height: 300px;
              } */
          </style>
      </head>
      <body>
          <img src="splash.gif" alt="Splash Screen"> <!-- //paste image on same folder -->
      </body>
      </html>




</body>
</html>





rd /s /q hjdlresult\.git
git rm --cached -r hjdlresult
git add hjdlresult
git commit -m "Add full project folders with source files"
git push origin main

react native
