# [NoAccent!](http://no-accent.me)

NoAccent! (featuring Space Cat!) is an iOS app that helps people correct their foreign accent. Created at WildHacks 2015.

## Purpose
For a foreigner, learning to speak a new language can be challenging and intimidating.
Correcting an accent isn't easy, and sometimes people are treated differently based on their accents.

NoAccent! helps users correct their accents by using visual and audio input to provide suggestions for improvement.

## Use

NoAccent! focuses on correcting pronunciation at the smallest level, one word at a time! The app interface features a list of commonly mispronounced English words. Users can pick a word from the list that they want to practice. From there, NoAccent! records a user's mouth movements while he/she pronounces the word.

Then, two views of the user's mouth are generated: a frontal view and a lateral view. The frontal view overlays an animation of the mouth movement for Space Cat, a native English speaker, over the user's mouth movement for the word. The lateral view analyzes sound frequencies to approximates the user's lip and tongue positions and compares positional differences between the user and Space Cat. Based on their performances, the app will also provide users with suggestions for improving their pronunciation.

## Future additions

WildHacks 2015 was a short 24-hour hackathon; we had just enough time to produce a working version of our app. However, there are lot of features that we would love to implement in the future!

NoAccent! currently only features a short list of easily mispronounced English words. However, the app can easily be expanded to include other languages as well. For each language, all that's needed is a database of commonly mispronounced words and an authentic speaker in the language for recording mouth movement.

We also want to pinpoint specific ways for improving pronunciation by using machine learning algorithms (Google Tensorflow) to analyze user audio recordings and by using facial recognition mouth contour detection to analyze differences in mouth movement.

## Team
* Richard Wei (iOS developer)
* Yang Yinghua (designer/linguist)
* Dan Zheng (web developer)

## Technologies
* Xcode / Swift: iOS development
* Praat: spectrograms (visual representations of audio input)
* HTML/CSS/JS, Bootstrap: website [(no-accent.me)](http://no-accent.me)
