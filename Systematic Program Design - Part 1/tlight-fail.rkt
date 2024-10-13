;; The first three lines of this file were inserted by DrRacket. They record metadata
;; about the language level of this file in a form that our tools can easily process.
#reader(lib "htdp-beginner-reader.ss" "lang")((modname tlight-fail) (read-case-sensitive #t) (teachpacks ()) (htdp-settings #(#t constructor repeating-decimal #f #t none #f () #f)))
;; Data definations:

;; Tlight is one of:
;; - false
;; - "red"
;; - "yellow"
;; - "green"
;; interp. false means not working, or the name of color

(deline T1 false)
(define T2 "red")

(define (tlight t)
  (cond
     [(false? t) (...)]
     [(string=? t "red") (...)]
     [(string=? t "yellow") (...)]
     [(string=? t "green") (...)]
   )
 )

(define (fn-for-tlight t)
  (cond
      [(false? t)]
      [(string=? t "red") "red"]
      [(string=? t "yellow") "yello"]
      [else "red"]
     )
 )