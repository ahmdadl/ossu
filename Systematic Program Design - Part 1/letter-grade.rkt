;; The first three lines of this file were inserted by DrRacket. They record metadata
;; about the language level of this file in a form that our tools can easily process.
#reader(lib "htdp-beginner-reader.ss" "lang")((modname letter-grade) (read-case-sensitive #t) (teachpacks ()) (htdp-settings #(#t constructor repeating-decimal #f #t none #f () #f)))
;; LetterGrade is one of:
;; - "P"
;; - "F"
;; - "E"
;; interp. the letter grade in course

(define (fn-for-letterGrade lg)
  (cond
    [(string=? lg "P") (...)]
    [(string=? lg "F") (...)]
    [(string=? lg "E") (...)]
    )
  )